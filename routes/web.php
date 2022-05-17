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

Route::get('/front', function(){
    return view('front-end.master');
});

Route::get('/reservation/create', 'ReservationController@create');
Route::post('/reservation', 'ReservationController@store');
Route::get('/reservation', 'ReservationController@index');
Route::get('/reservation/{id}/edit', 'ReservationController@edit');
Route::put('/reservation/{id}', 'ReservationController@update');
Route::delete('/reservation/{id}', 'ReservationController@destroy');

Route::get('/menu/create', 'MenuController@create');
Route::post('/menu', 'MenuController@store');
Route::get('/menu', 'MenuController@index');
Route::get('/menu/{id}/edit', 'MenuController@edit');
Route::put('/menu/{id}', 'MenuController@update');
Route::delete('/menu/{id}', 'MenuController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('items');




Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::get('/category', 'CategoryController@index');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::put('/category/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@destroy');