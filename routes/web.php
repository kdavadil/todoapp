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

Route::get('/about', function () {
    return view('about');
});

Route::get('todos', 'ToDosController@index');
Route::get('todos/{todo}', 'ToDosController@show');
Route::get('new-todos', 'ToDosController@create');
Route::post('store-todos', 'ToDosController@store');
