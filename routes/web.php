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
Route::get('/about', function () {
    return view('about');
});
Route::get('/all-dogs', function () {
    return view('all-dogs');
});
Route::get('/dog-show/{id}', 'DogsController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
