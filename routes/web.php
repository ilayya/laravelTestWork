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

Route::get('/', 'App\Http\Controllers\Front\AuthorController@index');

Route::get('admin/authors', 'App\Http\Controllers\Admin\AuthorController@all');
Route::get('admin/authors/create', 'App\Http\Controllers\Admin\AuthorController@create');
Route::get('admin/authors/edit/{id}', 'App\Http\Controllers\Admin\AuthorController@edit');
Route::get('admin/authors/delete/{id}', 'App\Http\Controllers\Admin\AuthorController@delete');

Route::get('admin/books', 'App\Http\Controllers\Admin\BookController@all');
Route::get('admin/books/create', 'App\Http\Controllers\Admin\BookController@create');
Route::get('admin/books/edit/{id}', 'App\Http\Controllers\Admin\BookController@edit');
Route::get('admin/books/delete/{id}', 'App\Http\Controllers\Admin\BookController@delete');

Route::get('api/v1/books/list', 'App\Http\Controllers\Api\V1\BookController@all');
Route::get('api/v1/books/{id}', 'App\Http\Controllers\Api\V1\BookController@one');
Route::post('api/v1/books/update', 'App\Http\Controllers\Api\V1\BookController@update');
Route::delete('api/v1/books/{id}', 'App\Http\Controllers\Api\V1\BookController@delete');

