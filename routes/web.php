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

Route::get('/', 'ServiceController@index')->name('index');
Route::get('/about', 'ServiceController@about')->name('about');

Route::resource('/blog', 'BlogController', [
    'only' => ['index', 'show']
]);

Route::resource('/product', 'ProductController', [
    'only' => ['index', 'show']
]);
