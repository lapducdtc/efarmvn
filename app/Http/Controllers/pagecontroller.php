<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\news;
use App\comment_news;
use App\email;
use App\video;
use App\type_news;
use App\images_news;
use App\book;
use App\led;
use App\type_book;
use App\contact;
use App\regweb;
use Auth;
use Session;
use DateTime,File,Input,DB;
use Illuminate\Support\Str; 

include('simple_html_dom.php');



class pagecontroller extends Controller
{
    //
    public function getLogin()
    {
    	return view('back_end.Login');
    }

    public function postLogin(Request $req)
    {
    	$this->validate($req,
    		[
    			'email'=>'required|email', 
    			'password'=>'required|min:8|max:20'
    		],
    		[
    			'email.required'=>'vui lòng nhập email',
    			'email.email'=>'emaail không đúng định dạng',
    			'password.required'=>'vui lòng nhập mật khẩu',
    			'password.min'=>'mật khẩu ít nhất 8 ký tự',
    			'password.max'=>'mật khẩu không quá 20 ký tự'
    		]);
    	$check = array('email' =>$req->email ,'password'=>$req->password );
    	if(Auth::attempt($check)){
    		return view('back_end.index');
    	}
    	else
    	{
    		return redirect()->back()->with('thongbao','Đăng nhập không thành công');
    	}
    	
    }


    public function getLogout()
    {
    	Auth::logout();
    	return redirect()->back();
    }

    public function getIndex()
    {
    	if(Auth::check())
    	{
    		return view('back_end.index');
    	}
    	else
    	{
    		return view('back_end.Login');
    	}
    }

    public function getdmtintuc()
    {
    	if(Auth::check())
    	{
    		$dmtintuc = type_news::all();
    		return view('back_end.Danhmuctintuc',compact('dmtintuc'));
    	}
    	else
    	{
    		return view('back_end.Login');
    	}
    }

    public function adddmtintuc(Request $req)
    {
        $this->validate($req,
            [
                'namedmtt'=>'required',
                'motadmtt'=>'required'
            ],
            [
                'namedmtt.required'=>'vui lòng nhập tên danh mục',
                'motadmtt.required'=>'vui lòng nhập mô tả danh mục'
            ]

        );
        $dmtt = type_news::all();
        $i = 0;
        foreach ($dmtt as $dm) {
           $i++;
        }
        if($i != 0)
        {
            foreach ($dmtt as $dm) 
            {
                if($dm->name == $req->namedmtt)
                {
                    return redirect()->back()->with('thongbao','Danh mục đã tồn tại');
                }
                else
                {
                    $dmtt = new type_news();
                    $dmtt->name = $req->namedmtt;
                    $dmtt->description = $req->motadmtt;
                    $dmtt->type_slug = Str::slug($req->namedmtt, '-');
                    $dmtt->save();
                    return redirect()->back()->with('thongbao','Thêm danh mục thành công');
                }
            }
        }
        else
        {
                    $dmtt = new type_news();
                    $dmtt->name = $req->namedmtt;
                    $dmtt->description = $req->motadmtt;
                    $dmtt->type_slug = Str::slug($req->namedmtt, '-');
                    $dmtt->save();
                    return redirect()->back()->with('thongbao','Thêm danh mục thành công');
        }
        
    }

    public function editdmtintuc(Request $req, $id)
    {
        $this->validate($req,
            [
                'namedmtt'=>'required',
                'motadmtt'=>'required'
            ],
            [
                'namedmtt.required'=>'vui lòng nhập tên danh mục',
                'motadmtt.required'=>'vui lòng nhập mô tả danh mục'
            ]

        );

        $dmtt = type_news::find($id);
        $dmtt->name = $req->namedmtt;
        $dmtt->description = $req->motadmtt;
        $dmtt->save();
        return redirect()->back()->with('thongbao','Sửa danh mục thành công');
    }


    public function getdelete($id)
    {
        $baiviet = news::all();
        $binhluan = comment_news::all();
        foreach ($baiviet as $bv) {
            if($bv->id_type == $id)
            {
                foreach ($binhluan as $bluan) {
                    if($bluan->id_news == $bv->id){
                        $bl = comment_news::find($bluan->id);
                        $bl->delete();
                    }
                }
                $b = news::find($bv->id);
                $b->delete();
            }
        }
        $dmtt = type_news::find($id);
        $dmtt->delete();
        return redirect()->back()->with('thongbao','Xóa danh mục thành công');
    }


    public function getbaiviet()
    {
        if(Auth::check()){
            $dmtt = type_news::all();
            $baiviet = news::all();
            $web = regweb::all();
            return view('back_end.baiviet', compact('baiviet','dmtt','web'));
        }
        else
        {
            return view('back_end.Login');
        }
        
    }
    
    public function addbaiviet(Request $req)
    {
        $news = new news();

        $news->id_type = $req->dmtt;
        $news->title = $req->title;
        $news->title_slug = Str::slug($req->title, '-');
        $news->review = $req->review;
        $news->content = $req->content;
        $news->author = $req->tacgia;
        $news->view = '0';
        $news->likes = '0';
        $news->created_at = new datetime;
        $news->level = $req->level;
        $file = $req->file('imgnews')->getClientOriginalName();
        $filename = time().'_'.$file;
        $news->image = $filename;     
        $req->file('imgnews')->move('public/back_end/img/',$filename);
        $news->keyword = $req->keyword;
        $news->save();
        return redirect()->back()->with('thongbao','Thêm bài viết thành công');
    }

    public function autoadd(Request $req)
    {
        $url = $req->link;
        $html = file_get_html($url);
        $newcheck = news::all();
        $web = regweb::find($req->web);
        $news = new news();
        $news->id_type = $req->dmtt;
        $news->title = $html->find($web->title,0)->plaintext;
        $news->title_slug = Str::slug($web->title, '-');
        $news->review = $html->find($web->review,0)->plaintext;
        $news->content = $html->find($web->content,0)->plaintext;
        $news->author = $html->find($web->author,0)->plaintext;
        $news->view = '0';
        $news->likes = '0';
        $news->created_at = new datetime;
        $news->level = rand(1, 3);
        $file = $req->file('imgnews')->getClientOriginalName();
        $filename = time().'_'.$file;
        $news->image = $filename;     
        $req->file('imgnews')->move('public/back_end/img/',$filename);
        $news->keyword = $html->find($web->tag,0)->content;
        $news->save();
        return redirect()->back()->with('thongbao','Thêm bài viết thành công');

    }
    public function editbaiviet(Request $req, $id)
    {
        $news = news::find($id);

        $news->title = $req->title;
        $news->title_slug = Str::slug($req->title, '-');
        $news->review = $req->review;
        $news->content = $req->content;
        $news->author = $req->tacgia;
        $news->view = '0';
        $news->likes = '0';
        $news->level = $req->level;
        $news->created_at = new datetime;
        if ( is_null($req->imgnews)){
            
        }
        else
        {
            $file = $req->file('imgnews')->getClientOriginalName();
            $filename = time().'_'.$file;
            $news->image = $filename;     
            $req->file('imgnews')->move('public/back_end/img/',$filename);
        }

        
        $news->save();
        return redirect()->back()->with('thongbao','Sửa bài viết thành công');

    }

    public function deletebaiviet($id)
    {
        $comment = comment_news::all();
        if($comment != null){


        foreach ($comment as $coment) {
            if($coment->id_news == $id)
            {
                $coment->delete();
            }
        }
        $baiviet = news::find($id);
        if (file_exists('public\back_end\img/'.$baiviet->image)) {
            unlink('public\back_end\img/'.$baiviet->image);
        }
        
        $baiviet->delete();
        
        return redirect()->back()->with('thongbao','Xóa bài viết thành công');
        }
        else{
            $baiviet = news::find($id);
            if (file_exists('public\back_end\img/'.$baiviet->image)) {
            unlink('public\back_end\img/'.$baiviet->image);
        }
            $baiviet->delete();
            
            return redirect()->back()->with('thongbao','Xóa bài viết thành công');
        }
    }

    public function getbinhluan()
    {
        if(Auth::check()){
            $binhluan = comment_news::all();
            return view('back_end.Binhluan',compact('binhluan'));
        }
        else
        {
            return view('back_end.Login');
        }
        
    }

    public function getHome()
    {
        return view('front_end.Home');
    }

    public function getgioithieu()
    {
        return view('front_end.gioithieu');
    }

    public function getlienhe()
    {
        return view('front_end.lienhe');
    }

    public function regemail(Request $req)
    {
        $email = new email();
        $email->email = $req->email;
        $email->created_at = new datetime;
        $email->save();
        return redirect()->back();
    }

    public function sentcontact(Request $req)
    {
        $contact = new contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->content = $req->content;
        $contact->created_at = new dateTime;
        $contact->save();
        return redirect()->back();
    }

    public function getvideo()
    {
        $video = video::all();
        return view('back_end.video',compact('video'));
    }

    public function addvideo(Request $req)
    {
        $video = new video();

        $video->title = $req->title;
        $video->link = $req->link;
        $video->tag = $req->tag;
        $video->created_at = new datetime;
        $video->save();
        return redirect()->back();
    }

    public function editvideo(Request $req, $id)
    {
        $video = video::find($id);

        $video->title = $req->title;
        $video->link = $req->link;
        $video->tag = $req->tag;
        $video->created_at = new datetime;
        $video->save();
        return redirect()->back();
    }

    public function deletevideo($id)
    {
        $video = video::find($id);
        $video->delete();
        return redirect()->back();
    }

    public function regweb()
    {
        $regweb = regweb::all();
        return view('back_end.regweb',compact('regweb'));
    }

    public function addweb(Request $req)
    {
        $regweb = new regweb();
        $regweb->name = $req->name;
        $regweb->title = $req->title;
        $regweb->review = $req->review;
        $regweb->content = $req->content;
        $regweb->img = $req->img;
        $regweb->tag = $req->tag;
        $regweb->author = $req->author;
        $regweb->created_at = new dateTime;
        $regweb->save();
        return redirect()->back();
    }

    public function editweb(Request $req,$id)
    {
        $regweb = regweb::find($id);
        $regweb->name = $req->name;
        $regweb->title = $req->title;
        $regweb->review = $req->review;
        $regweb->content = $req->content;
        $regweb->img = $req->img;
        $regweb->tag = $req->tag;
        $regweb->author = $req->author;
        $regweb->created_at = new dateTime;
        $regweb->save();
        return redirect()->back();
    }

    public function deleteweb($id)
    {
        $regweb = regweb::find($id);
        $regweb->deleteweb();
        return redirect()->back();
    }
    
    public function gettypebook()
    {
        if(Auth::check())
        {
            $type_book = type_book::all();
            return view('back_end.Danhmucsach', compact('type_book'));
        }
        else
        {
            return view('back_end.Login');
        }
        
    }

    public function addtypebook(Request $req)
    {
        $type = type_book::all();
        $i = 0;
        foreach ($type as $dm) {
           $i++;
        }
        if($i != 0)
        {
            foreach ($type as $t) {
                if($t->name == $req->name)
                {
                    return redirect()->back()->with('thongbao','danh mục sách đã tồn tại');
                }
                else
                {
                    $type_book = new type_book();
                    $type_book->name = $req->name;

                    $type_book->type_slug = Str::slug($req->name, '-');
                    $type_book->description = $req->description;
                    
                    $type_book->save();
                    return redirect()->back()->with('thongbao','Thêm danh mục sách thành công');
                }
            }
        }
        else
        {
            $type_book = new type_book();
            $type_book->name = $req->name;
            $type_book->type_slug = Str::slug($req->name, '-');
            $type_book->description = $req->description;
            $type_book->save();
            return redirect()->back()->with('thongbao','Thêm danh mục sách thành công');
            
        }
        
        
    }

    public function edittypebook(Request $req, $id)
    {
        $type_book = type_book::find($id);
        $type_book->name = $req->name;
        $type_book->type_slug = Str::slug($req->name, '-');
        $type_book->description = $req->description;
        $type_book->save();
        return redirect()->back()->with('thongbao','Sửa danh mục sách thành công');
    }

    public function deletetypebook($id)
    {
        $type_book = type_book::find($id);
        $type_book->delete();
        return redirect()->back()->with('thongbao','Xóa danh mục sách thành công');
    }
    
    public function getbook()
    {
        if(Auth::check())
        {
            $type_book = type_book::all();
            $book = book::all();
            return view('back_end.book',compact('book','type_book'));
        }
        else
        {
            return view('back_end.Login');
        }
        
    }
    public function addbook(Request $req)
    {
        $allbook = book::all();
        $i=0;
        foreach ($allbook as $book) {
           
            $i++;
           
        }
        if($i!=0)
        {
            $j=0;
            foreach ($allbook as $b) {
                if($b->Title  == $req->Title){
                    $j=$j+1;
                }
            }
            if($j!= 0)
            {
                 return redirect()->back()->with('thongbao','Sách đã tồn tại');
            }
            else
            {
                $book = new book();
                $book->id_type = $req->id_type;
                $book->Title = $req->Title;
                $book->Title_slug = Str::slug($req->Title, '-');
                $book->review = $req->review;
                $book->content = $req->content;
                $book->keyword = $req->keyword;
                $file = $req->file('img')->getClientOriginalName();
                $filename = time().'_'.$file;
                $book->img = $filename;     
                $req->file('img')->move('public/back_end/img/',$filename);
                $book->save();
                return redirect()->back()->with('thongbao','Thêm thành công');
            }
        }
        else
        {
            $book = new book();
            $book->id_type = $req->id_type;
            $book->Title = $req->Title;
            $book->Title_slug = Str::slug($req->Title, '-');
            $book->review = $req->review;
            $book->content = $req->content;
            $book->keyword = $req->keyword;
            $file = $req->file('img')->getClientOriginalName();
            $filename = time().'_'.$file;
            $book->img = $filename;     
            $req->file('img')->move('public/back_end/img/',$filename);

            $book->save();
            return redirect()->back()->with('thongbao','Thêm thành công');
        }
        
        
    }

    public function editbook(Request $req, $id)
    {
        $book = book::find($id);

        $book->Title = $req->title;
        $book->review = $req->review;
        $book->content = $req->content;
        $book->img = $req->img;
        $book->keyword = $req->keyword;
        $book->created_at = new datetime;
        $book->save();
        return redirect()->back()->with('thongbao','Sửa thành công');
    }

    public function deletebook($id)
    {
        $book = book::find($id);
        $book->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }
    public function getesp(Request $req)
    {
           return led::all();
    }
    
}
