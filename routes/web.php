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
    return view('blog/index');
});
Route::get('/post', function () {
    return view('blog/index');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');

Route::get('/dashboard/post/','PostController@index');
Route::get('/dashboard/post/create','PostController@create');
Route::post('/dashboard/post/store','PostController@store');
Route::get('/dashboard/post/{id}','PostController@edit');
Route::post('/dashboard/post/{id}','PostController@update');
Route::delete('/dashboard/post/{id}','PostController@destroy');

