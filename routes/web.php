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
    return view('index');
});

Route::get('/profile', function () {
    return view('volunteers.profile');
});

Route::get('/volunteers-list', function () {
    return view('volunteers.list');
});

Route::get('/registration-step1', function () {
    return view('volunteers.register-step-one');
});

Route::get('/registration-step2', function () {
    return view('volunteers.register-step-two');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
