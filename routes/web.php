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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create','PostController@create_post')->name('create');     //create post frontend route

Route::post('/store','PostController@store_post');   //store user data route


Route::get('/show','PostController@show_post')->name('show');    //get data from database to frotend

Route::get('/search','PostController@search_post')->name('search');    //search


Route::get('/posts/edit/{id}','PostController@update_view');   //pass data to the update viwe from

Route::put('/posts/{id}','PostController@update_post');    //update

Route::get('/posts/delete/{id}','PostController@delete_view');   // pass data to the delete view

Route::delete('/posts/{id}','PostController@delete_post');    //delete
