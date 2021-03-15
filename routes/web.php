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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/posts', 'HomeController@posts')->name('posts');
Route::get('/grid', 'HomeController@grid')->name('grid');
Route::get('/masonry', 'HomeController@masonry')->name('masonry');
Route::get('/post/{id}', 'HomeController@post')->name('post');

Route::get('/home', 'HomeController@home')->name('home');

Auth::routes();

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'Admin\HomeController@home')->name('admin.home');
});


