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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('pages.index');
//});

//Public routes
Route::get('/', 'PageController@home')->name('home');
Route::get('cover-letter', 'PageController@coverLetter')->name('cover-letter');
Route::get('jobs', 'PageController@jobs')->name('jobs');
Route::get('contact', 'PageController@contact')->name('contact');

//Authentication routes
Auth::routes();
Route::get('register', 'Auth\LoginController@showLoginForm')->name('register');

//Private routes
Route::get('choose-template', 'CredentialController@chooseTemplate')->name('choose-template');
Route::get('create-resume', 'CredentialController@createResume')->name('create-resume');
Route::get('header', 'CredentialController@createHeader')->name('header');


//Route::get('/home', 'HomeController@index')->name('home');
