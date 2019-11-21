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

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('dreamlist', function () {
    return view('dreamlist');
});

Route::get('timeline', function () {
    return view('timeline');
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/mimpi', 'MimpiController@index');
Route::get('/admin/posts', 'PostsController@index');
Route::get('/admin/streams', 'StreamsController@index');
Route::get('/admin/users', 'UsersController@index');