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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'LoginController@login' );

Route::get('/login', 'LoginController@login');

Route::get('/inicio', 'LoginController@inicio');

Route::get('/cargar-documento', function (){
	return view('Preparacion/cargar-documento');
});
