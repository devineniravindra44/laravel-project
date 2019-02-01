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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
/*
Route::get('/about', function () {
    return view('about');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/services', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'DemoController@index')->demo('home');

Route::get('/demo/{id}','DemoController@demo');

Route::resource('/test/{id}','TestController@show');

