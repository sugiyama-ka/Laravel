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

/*
Route::resource('books', 'BookController') は 以下のルーティングをまとめて定義します。
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
| Domain | Method    | URI               | Name          | Action                                      | Middleware   |
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
|        | GET|HEAD  | books             | books.index   | App\Http\Controllers\BookController@index   | web          |
|        | POST      | books             | books.store   | App\Http\Controllers\BookController@store   | web          |
|        | GET|HEAD  | books/create      | books.create  | App\Http\Controllers\BookController@create  | web          |
|        | GET|HEAD  | books/{book}      | books.show    | App\Http\Controllers\BookController@show    | web          |
|        | PUT|PATCH | books/{book}      | books.update  | App\Http\Controllers\BookController@update  | web          |
|        | DELETE    | books/{book}      | books.destroy | App\Http\Controllers\BookController@destroy | web          |
|        | GET|HEAD  | books/{book}/edit | books.edit    | App\Http\Controllers\BookController@edit    | web          |
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
*/
Route::resource('books', 'BookController');

//user
Route::resource('users', 'UserController');



