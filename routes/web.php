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

Route::get('/edited', function () {
    return view('message')->with('data','Edit succesfully');
})->name('edited');

Route::get('/added', function () {
    return view('message')->with('data','Add succesfully');
})->name('added');

Route::get('/create-sucess', function () {
    return redirect('welcome');
});

Route::get('/edit-incidence','IncidenceController@getRow');

Route::get('/show','IncidenceController@getRow');

Route::post('/add-incidence', 'IncidenceController@create');

Route::post('/edit-incidence', 'IncidenceController@edit');

Auth::routes();

Route::get('/incidence', 'IncidenceController@getData')->name('incidence');

Route::get('/home', 'IncidenceController@getData')->name('home');
