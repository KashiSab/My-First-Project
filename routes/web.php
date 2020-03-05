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

Route::get('/home', 'HomeController@index')->name('home');
//get(url_name, controller@function_name)
Route::get('/user', 'UserController@index');
// Product Routes
Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/save', 'ProductController@store');

Route::get('/products/edit/{id}', 'ProductController@edit');
Route::post('/products/edit/{id}', 'ProductController@update');
Route::get('/products/delete/{id}', 'ProductController@destroy');
Route::get('/products/show/{id}', 'ProductController@show');
// Customer Routes
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer/save', 'CustomerController@store');

Route::get('/customer/edit/{id}', 'CustomerController@edit');
Route::post('/customer/edit/{id}', 'CustomerController@update');
Route::get('/customer/delete/{id}', 'CustomerController@destroy');
Route::get('/customer/show/{id}', 'CustomerController@show');
// Change Logo
Route::get('/logo', 'LogoController@Logo');
Route::post('/logo/store', 'LogoController@store');
// Expample Contact
Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/create', 'BlogController@create');
Route::post('/blogs/save', 'BlogController@store');

Route::get('/blogs/edit/{id}', 'BlogController@edit');
Route::post('/blogs/edit/{id}', 'BlogController@update');
Route::get('/blogs/delete/{id}', 'BlogController@destroy');
Route::get('/blogs/show/{id}', 'BlogController@show');

Route::get('/blogs/{id}', 'BlogController@show');