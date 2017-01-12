<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','ArticleController@index');

Route::get('article/test','ArticleController@test');

Route::get('articles/{id}','ArticleController@detail');

Route::get('article/create','ArticleController@create');

Route::post('article/store','ArticleController@store');

Route::get('article/edit/{id}','ArticleController@edit');

Route::post('article/update','ArticleController@update');

Route::get('article/delete/{id}','ArticleController@delete');