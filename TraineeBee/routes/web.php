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

//Get request for PagesController.php(app/http/controllers/PagesController.php)
//this will handle all the requests for customers looking for pages.
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/info', 'PagesController@CandCInfo');
Route::get('/login', 'PagesController@login');
Route::get('/contact', 'PagesController@contact');
Route::get('/profile', 'UserController@index');
Route::get('/admin', 'PagesController@adminpanel');
Route::get('/home', function(){return view('home');});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/posts/create', 'PostsController@create');
Route::get('/yourposts', 'HomeController@index');
Route::get('/contact', 'PagesController@contact');
Auth::routes();

Route::resource('posts', 'PostsController');
Route::resource('profile', 'UserController');

