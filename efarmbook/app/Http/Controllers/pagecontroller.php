<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\news;
use App\book;
use App\type_book;
use App\email;
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
		$book = book::all();
		$type_book = type_book::all();
		$news = news::orderBy('id', 'desc')->limit(5)->get();
		return view('index',compact('book','type_book','news'));
	}

	public function gettypebook($type_slug)
	{
		$type_book = type_book::all();
		$book = book::all();
		$type_book1 = type_book::where('type_slug',$type_slug)->get();
		$news = news::orderBy('id', 'desc')->limit(5)->get();
		return view('typebook', compact('type_book','type_book1','book','news'));
	}

	public function search(Request $req)
	{
		$book = book::where('Title','like','%'.$req->keywork.'%')->Paginate(10);
		$type_book = type_book::all();
		$news = news::orderBy('id', 'desc')->limit(5)->get();
		if(empty($book))
		{
			$thongbao = 'không có kết quả nào phù hợp với từ khóa "'.$req->keywork.'"';
			return view('search',compact('type_book','news','thongbao'));
		}
		else
		{
			$thongbao ='Kết quả tìm kiếm cho từ khóa "'.$req->keywork.'"';
			return view('search',compact('book','type_book','news','thongbao'));
			
		}
	}

	public function getbook($Ttile_slug)
	{
		$bookall = book::all();
		$book = book::where('Title_slug',$Ttile_slug)->get();
		$type_book = type_book::all();
		$news = news::orderBy('id', 'desc')->limit(5)->get();
		return view('book',compact('book','type_book','news','bookall'));
	}

	public function regemail(Request $req)
	{
		$email = new email();
		$email->email = $req->email;
		$email->created_at = new datetime;
        $email->save();
        return redirect()->back();
	}
}
