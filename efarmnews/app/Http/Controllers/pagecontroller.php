<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\news;
use App\video;
use App\comment_news;
use App\email;
use App\type_news;
use App\images_news;
use App\contact;
use Auth;
use Session;
use DateTime,File,Input,DB;
use Illuminate\Support\Str; 





class pagecontroller extends Controller
{
	public function getIndex()
	{
		$news_all = news::orderBy('id', 'desc')->get();
		$news_top = news::orderBy('view', 'desc')->get();
		$danhmuc = type_news::all();
		$trending_top= news::orderBy('id', 'desc')->where('level','=',1)->limit(1)->get();
		$trending_right = news::orderBy('id', 'desc')->where('level','=',2)->limit(5)->get();
		$weekly_top = news::orderBy('view', 'desc')->limit(3)->get();
		return view('index',compact('danhmuc','trending_top','trending_right','news_all','weekly_top','news_top'));
	}

	public function regemail(Request $req)
	{
		$email = new email();
		$email->email = $req->email;
		$email->created_at = new datetime;
        $email->save();
        return redirect()->back();
	}

	public function getdanhmuc($type_slug)
	{
		$danhmuc = type_news::all();

		foreach ($danhmuc as $dm) {
			if($dm->type_slug == $type_slug)
			{
				$id = $dm->id;
				$name_dm = $dm->name;
			}
		}
		$news_top = news::orderBy('id', 'desc')->where('id_type',$id)->limit(1)->get();
		$news = news::orderBy('id', 'desc')->where('id_type',$id)->Paginate(10);
		if(isset($news)){
			
			return view('danhmuc',compact('danhmuc','news','name_dm','news_top'));
		}
		else{
			$thongbao = 'Không có dữ liệu';
			return view('danhmuc',compact('danhmuc','thongbao'));
		}
	}

	public function getbaiviet($title_slug)
	{
		$danhmuc = type_news::all();
		$news = news::where('title_slug',$title_slug)->get();
		foreach ($news as $new) {
			$id_danhmuc = $new->id_type;
			$binhluan = comment_news::where('id_news',$new->id)->get();
		}
		
		$news_dm = news::where('id_type',$id_danhmuc)->Paginate(10);
		return view('baiviet',compact('danhmuc','news','binhluan','news_dm'));
	}

	public function binhluan(Request $req, $id)
	{
		$binhluan = new comment_news();

		$binhluan->name = $req->name;
		$binhluan->id_news = $id;
		$binhluan->email = $req->email;
		$binhluan->phone = $req->phone;
		$binhluan->content = $req->content;
		$binhluan->created_at = new datetime;
		$binhluan->save();
		return redirect()->back();
	}

	public function timkiem(Request $req)
	{
		$news = news::where('title','like','%'.$req->search.'%')->Paginate(10);
		$danhmuc = type_news::all();
		if(isset($news))
		{
			return view('search',compact('news','danhmuc'));
		}
		else
		{
			return view('search',compact('danhmuc'))->with('thongbao','Không tìm thấy kết quả nào phù hợp');
		}
		
	}
}
