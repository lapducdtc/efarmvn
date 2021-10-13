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




Route::get('',[
	'as'=>'Index',
	'uses'=>'pagecontroller@getIndex'
]);

Route::get('{type_slug}',[
	'as'=>'danhmuc',
	'uses'=>'pagecontroller@getdanhmuc'
]);

Route::get('baiviet/{title_slug}',[
	'as'=>'baiviet',
	'uses'=>'pagecontroller@getbaiviet'
]);

Route::post('binhluan/{id}',[
	'as'=>'binhluan',
	'uses'=>'pagecontroller@binhluan'
]);
Route::post('regemail',[
	'as'=>'regemail',
	'uses'=>'pagecontroller@regemail'
]);

Route::post('Tim-Kiem',[
	'as'=>'search',
	'uses'=>'pagecontroller@timkiem'
]);