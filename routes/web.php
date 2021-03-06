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

Route::get('/', 'ProductController@index')->name('products.index');
Route::get('/tag/{tag}', 'ProductController@tag')->name('products.tag');
Route::get('/category/{category}', 'ProductController@category')->name('products.category');
Route::get('/category/{category}/{tag}', 'ProductController@categoryTag')->name('products.category.tag');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

Route::get('/checkout', 'CartController@show')->name('cart.checkout.show');
Route::post('/checkout', 'CartController@store')->name('cart.checkout.store');

Route::get('/about', 'ServiceController@about')->name('about');

Route::resource('/blog', 'BlogController', [
    'only' => ['index', 'show']
]);
Route::get('/blog/category/{category}', 'BlogController@category')->name('blog.category');
