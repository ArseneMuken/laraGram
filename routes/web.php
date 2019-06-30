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

Auth::routes();

Route::post('follow/{user}', 'FollowsController@store');

//Route::get('/', 'ProfilesController@index')->name('home');
Route::post('/post', 'PostsController@store')->name('post.store');
Route::get('/post/create', 'PostsController@create')->name('post.create');
Route::get('/post/{post}', 'PostsController@show')->name('post.show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
