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
Route::get('welcome/{lang?}', 'StartPageController@welcome');
Route::get('main','MainController@mainpage');
Route::get('register','RegisterController@register');
Route::get('login','LoginController@login');

// google login
Route::get('glogin',array('as'=>'glogin','uses'=>'UserController@googleLogin')) ;
Route::get('google-user',array('as'=>'user.glist','uses'=>'UserController@listGoogleUser'));

//Uploading save files
Route::get('upload','FileController@show');
Route::post('upload/complete','FileController@upload');

//Download save files
Route::get('download','FileController@download');

//localization
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

//Validation according to https://laravel.com/docs/5.5/validation#quick-defining-the-routes


//not used yet
Route::resource('post', 'PostController');

