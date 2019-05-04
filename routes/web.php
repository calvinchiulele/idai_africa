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

Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/volunteers-list', 'VolunteerController@index')->name('volunteers.list');
Route::get('/volunteers-list/{district}/{asset}/{category}', 'VolunteerController@filterVolunteers')->name('volunteers.filter');


Route::get('/registration-step1', 'UserController@showFirstStep')->name('registration-step1');

Route::post('/savestep1', 'UserController@saveFirstStep')->name('savestep1');

Route::get('/registration-step2', 'UserController@showSecondStep')->name('registration-step2');

Route::post('/savestep2', 'UserController@saveSecondStep')->name('savestep2');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/_save_session', 'UserController@save_session')->name('saveSession');
