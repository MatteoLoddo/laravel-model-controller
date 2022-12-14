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

Route::get('/', "PageController@index")->name("index");

Route::get("/movies" , "MovieController@index")->name("movies.index");
Route::get("/movies/{id}" , "MovieController@show")->name("movies.show");
Route::get("/movies/{id}" , "MovieController@edit")->name("movies.edit");