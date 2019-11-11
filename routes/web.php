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

Route::get('hitung/{a}/{c}/{e}', function ($c,$d){
   return "nilai ".$c.'+'.$d.'='.($c+$d);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
