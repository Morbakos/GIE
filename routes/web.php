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
    return view('home');
});

Route::get('home', 'MyController@HomePage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('missions', 'MissionController', ['except' => 'show', 'destroy' ]);
Route::resource('tuto', 'TutoController', ['except' => ['destroy', 'update', 'edit' ]]);
