<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/',function()
{
	return View::make('test');
	log::info('test');
});

Route::get('/',function(){
	Log::info('eg1-1:It is test');
	return 'bubububu';
});


//Route::get('/','PagesController@index');
//Route::get('about','PagesController@about');
#Route::get('songs','SongsController@index');
#Route::get('songs/{id}','SongsController@show');
Route::get('/',function(){
	return Redirect::to('cats');
});
Route::get('cats',function(){
	return "all cats";
});

Route::get('about',function(){
	return View::make('about')->with('number_of_cats',9000);
});
*/


Route::get('articles', 'ArticlesController@index');

// 追加
Route::get('articles/create', 'ArticlesController@create'); // ①

Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');



Route::get('faq','FaqController@index');
#Route::get('faq/result','FaqController@show');

Route::get('/', 'FaqController@show');
