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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/playlist', 'VideosController@playlists')->name('home');
Route::get('/videos/1', 'VideosController@videosAds')->name('home');

Route::get('/', function () {
    return view('welcome');
});
