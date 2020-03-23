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

// Route::get('/', function () {
//     return view('index');
// });

// Route::resource('/', 'PageController');



Route::get('/','IndexController@index')->name('front');

Route::post('/','IndexController@sendmail');

 Auth::routes();
// Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users', 'UserController')->middleware('auth');

Route::resource('/admin/pages/services', 'BlogController')->middleware('auth');

Route::resource('/admin/portfolio', 'PortfolioController')->middleware('auth');
Route::resource('/admin/contact', 'ContactController')->middleware('auth');

Route::resource('/admin/pages', 'PageController')->middleware('auth');

Route::resource('/admin/logo', 'LogoController')->middleware('auth');

Route::get('/admin','AdminController@index'); //auth in construct

