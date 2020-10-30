<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/','WelcomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/show/{id}','PagesController@show');
/*Route::post('/saveproduct','PagesController@saveproduct');*/
Route::get('/create','PagesController@create');
Route::post('/saveproduct','PagesController@saveProduct');