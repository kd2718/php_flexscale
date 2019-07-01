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
    //return view('welcome');
    return view('nav/landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/CheckIn', 'CheckInController@store')->name('CheckIn.store');
Route::get('/CheckIn/{checkIn}/edit','CheckInController@edit')->name('CheckIn.edit');
Route::put('CheckIn/{checkIn}', 'CheckInController@update');
Route::delete('/CheckIn/{checkIn}', 'CheckInController@destroy');
Route::get('/CheckIn/{checkIn}', 'CHeckInController@show')->name('CheckIn.show');
