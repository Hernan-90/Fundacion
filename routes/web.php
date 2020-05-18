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


Auth::routes();

Route::get('/', 'LegisladorController@index');
Route::post('/', 'LegisladorController@store');

Route::get('/gracias',function () {return view('gracias');});

Route::get('/listado','LegisladorController@show')->middleware('auth');

Route::get('/editarLegislador/{id}','LegisladorController@edit')->middleware('auth');
Route::post('/editarLegislador/{id}','LegisladorController@update');
Route::get('/borrarLegislador/{id}','LegisladorController@delete')->middleware('auth');
