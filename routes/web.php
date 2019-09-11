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

Route::get('/', 'DefaultController@index')->name('default');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/channel/{channel}', 'ProfileController@channel')->name('channel');
Route::resource('/profile/project', 'ProjectController');


Route::get('/profile/project/myproject/{file}', 'IdeController@index')->name('ide');

