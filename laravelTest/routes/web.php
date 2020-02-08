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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/questionOne', 'TestController@questionOne')->name('Question One');
Route::get('/questionTwo', 'TestController@questionTwo')->name('Question Two');
Route::get('/questionThree', 'TestController@questionThree')->name('Question Three');