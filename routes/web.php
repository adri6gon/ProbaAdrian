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
})->name('welcome');


Route::get('/create-sucess', function () {
    return redirect('welcome');
});

Route::post('/add-incidence', 'IncidenceController@create');

Auth::routes();

Route::get('/home', 'IncidenceController@getData')->name('home');
