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
    return view('no1');
});

Route::get('/proyek', 'ProyekController@index');
Route::get('/proyek/create', 'ProyekController@create');
Route::post('/proyek', 'ProyekController@store');
Route::get('/proyek/{id}/daftarkan-staff', 'ProyekController@addstaff');
Route::get('/proyek/{id}/daftarkan-staff', 'ProyekController@storestaff');
Route::get('/proyek/{id}/edit', 'ProyekController@edit');
Route::put('/proyek/{id}', 'ProyekController@edit');
Route::delete('/proyek/{id}', 'ProyekController@destroy');
