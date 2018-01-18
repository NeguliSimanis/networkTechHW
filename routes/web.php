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

Route::get('/', 'StartPageController@welcome');
Route::get('main','MainController@mainpage');
Route::get('register','RegisterController@register');
Route::get('login','LoginController@login');
Route::get('upload','UploadController@upload');

Route::get('glogin',array('as'=>'glogin','uses'=>'UserController@googleLogin')) ;
Route::get('google-user',array('as'=>'user.glist','uses'=>'UserController@listGoogleUser'));

Route::resource('post', 'PostController');

