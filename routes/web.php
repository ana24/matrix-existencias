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
	return view('cargar-documento');
});

Route::get('/archivo-maestro', function (){
	return view('archivo-maestro');
});

Route::get('/stock-inventario', function (){
	return view('stock-inventario');
});

Route::get('/validador', function (){
	return view('validador');
});