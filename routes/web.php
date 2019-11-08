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

Route::get('/iniciarsesion', function () {
    return view('iniciodesesion');
});

Route::get('/registrarce', function () {
    return view('registrarce');
});

Route::get('/browse/featured', function() {
    return view('interfaz');
});


Route::post('/login', 'Usuarios@IniciarSesion');
Route::post('/register', 'Usuarios@Registrarusuario');

