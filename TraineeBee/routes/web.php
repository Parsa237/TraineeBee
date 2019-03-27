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
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/info', 'PagesController@CandCInfo');
