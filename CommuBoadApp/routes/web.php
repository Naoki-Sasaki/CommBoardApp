<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('threads','ThreadController@index');
Route::get('threads/create','ThreadController@create');
Route::post('threads/{title}','ThreadController@add');

Route::get('posts/{threads_id}','PostController@index');
Route::get('posts/{threads_id}/create','PostController@create');
Route::post('posts/{threads_id}/create/{text}','PostController@add');

Route::get('signin','PersonController@show');
Route::get('logout','PersonController@logout');
Route::post('signin/{login_id&login_pass}','PersonController@login');
Route::get('signup','PersonController@create');
Route::post('signup/{new_login_id&new_login_pass}','PersonController@add');
Route::get('edit','PersonController@editshow');
Route::post('edit/{new_name}','PersonController@edit');
