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
    return view('volunteers. profile');
});

Route::get('/volunteers-list', 'VolunteerController@index')->name('volunteers.list');
Route::get('/volunteers-list/{district?}/{asset?}', 'VolunteerController@filterVolunteers')->name('volunteers.filter');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
