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

Route::get('/spotify', function () {
    return view('spotify');
});
route::get('/reproductor',function (){
    return view('repro');
});
route::get('/interfaz',function (){
    return view('interfaz');
});