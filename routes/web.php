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

// main pages
Route::get('/', 'StartPageController@welcome');
Route::get('welcome/{lang?}', 'StartPageController@welcome');
Route::get('main','MainController@mainpage');


Auth::routes();

//admin login
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');       
Route::get('/admin','AdminController@index');

// google login
Route::get('glogin',array('as'=>'glogin','uses'=>'UserController@googleLogin')) ;
Route::get('google-user',array('as'=>'user.glist','uses'=>'UserController@listGoogleUser'));

//Uploading save files
Route::get('upload','FileController@show');
Route::post('upload/complete','FileController@upload');

//Download save files
Route::get('download','FileController@download');


//localization
//Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

//not used yet
Route::resource('post', 'PostController');


//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
