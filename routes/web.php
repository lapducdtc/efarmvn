<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'Admin'], function () {
	Route::get('',[
		'as' =>'Login',
		'uses'=>"pagecontroller@getLogin"
		]);
	Route::get('Login',[
		'as' =>'Login',
		'uses'=>"pagecontroller@getLogin"
	]);

	Route::post('Login',[
		'as' =>'Login',
		'uses'=>"pagecontroller@postLogin"
	]);
	Route::get('index',[
		'as' =>'index',
		'uses'=>"pagecontroller@getIndex"
	]);

	Route::get('dmtintuc',[
		'as' =>'dmtintuc',
		'uses'=>"pagecontroller@getdmtintuc"
	]);



	Route::get('Logout',
	[
		'as'=>'Logout',
		'uses'=>'pagecontroller@getLogout'
	]);

	Route::post('adddmtintuc',
	[
		'as'=>'adddmtintuc',
		'uses'=>'pagecontroller@adddmtintuc'
	]);

	Route::post('editdmtintuc/{id}',
	[
		'as'=>'editdmtintuc',
		'uses'=>'pagecontroller@editdmtintuc'
	]);
	Route::get('deletedmtt/{id}',
	[
		'as'=>'deletedmtt',
		'uses'=>'pagecontroller@getdelete'
	]);

	Route::get('baiviet',[
	'as' =>'baiviet',
	'uses'=>"pagecontroller@getbaiviet"
	]);

	Route::post('addbaiviet',[
		'as'=>'addbaiviet',
		'uses'=>'pagecontroller@addbaiviet'
	]);

	Route::post('editbaiviet/{id}',[
		'as'=>'editbaiviet',
		'uses'=>'pagecontroller@editbaiviet'
	]);

	Route::get('deletebaiviet/{id}',[
		'as'=>'deletebaiviet',
		'uses'=>'pagecontroller@deletebaiviet'
	]);

	Route::get('binhluan',[
		'as' =>'binhluan',
		'uses'=>"pagecontroller@getbinhluan"
	]);

	Route::get('EfarmTV',[
		'as'=>'video',
		'uses'=>'pagecontroller@getvideo'
	]);

	Route::post('Them-video',[
		'as'=>'addvideo',
		'uses'=>'pagecontroller@addvideo'
	]);
	Route::post('editvideo/{id}',[
		'as'=>'editvideo',
		'uses'=>'pagecontroller@editvideo'
	]);
	Route::get('deletevideo/{id}',[
		'as'=>'deletevideo',
		'uses'=>'pagecontroller@deletevideo'
	]);

	Route::get('regbaiviet',[
		'as'=>'regweb',
		'uses'=>'pagecontroller@regweb'
	]);

	Route::post('addweb',[
		'as'=>'addweb',
		'uses'=>'pagecontroller@addweb'
	]);

	Route::post('editweb/{id}',[
		'as'=>'editweb',
		'uses'=>'pagecontroller@editweb'
	]);

	Route::get('deleteweb/{id}',[
		'as'=>'deleteweb',
		'uses'=>'pagecontroller@deleteweb'
	]);

	Route::post('autoadd',[
		'as'=>'autoadd',
		'uses'=>'pagecontroller@autoadd'
	]);
	Route::get('book',[
		'as'=>'book',
		'uses'=>'pagecontroller@getbook'
	]);

	Route::get('typebook',[
		'as'=>'typebook',
		'uses'=>'pagecontroller@gettypebook'
	]);

	Route::post('addtypebook',[
		'as'=>'addtypebook',
		'uses'=>'pagecontroller@addtypebook'
	]);

	Route::post('edittypebook/{id}',[
		'as'=>'edittypebook',
		'uses'=>'pagecontroller@edittypebook'
	]);
	Route::get('deletetypebook/{id}',[
		'as'=>'deletetypebook',
		'uses'=>'pagecontroller@deletetypebook'
	]);

	Route::get('getbook',[
		'as'=>'getbook',
		'uses'=>'pagecontroller@getbook'
	]);

	Route::post('addbook',[
		'as'=>'addbook',
		'uses'=>'pagecontroller@addbook'
	]);

	Route::post('editbook/{id}',[
		'as'=>'editbook',
		'uses'=>'pagecontroller@editbook'
	]);
	Route::get('deletebook/{id}',[
		'as'=>'deletebook',
		'uses'=>'pagecontroller@deletebook'
	]);

});

Route::get('',[
	'as'=>'Index',
	'uses'=>'pagecontroller@getHome'
]);

Route::get('Gioi-thieu',[
	'as'=>'Gioithieu',
	'uses'=>'pagecontroller@getgioithieu'
]);

Route::get('Lien-he',[
	'as'=>'Lienhe',
	'uses'=>'pagecontroller@getlienhe'
]);

Route::post('reg-email',[
	'as'=>'regemail',
	'uses'=>'pagecontroller@regemail'
]);

Route::post('contact',[
	'as'=>'contact',
	'uses'=>'pagecontroller@sentcontact'
]);

Route::get('esp',[
	'as'=>'esp',
	'uses'=>'pagecontroller@getesp'
]);
