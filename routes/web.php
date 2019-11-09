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
    return redirect('/browse/featured');
});

Route::get('/iniciarsesion', function () {
    return view('viewsunknown.iniciodesesion');
});

Route::get('/registrarce', function () {
    return view('viewsunknown.registrarce');
});

Route::get('/reproductor',function (){
    return view('repro');
});

Route::get('/browse/featured',function (){
    return view('interfaz');
});

Route::get('/collection/playlists',function (){
    return view('Biblioteca.playlists');
});

Route::get('/collection/made-for-you',function (){
    return view('Biblioteca.especialparati');
});

Route::get('/collection/tracks',function (){
    return view('Biblioteca.cancionesquetegustan');
});

Route::get('/collection/albums',function (){
    return view('Biblioteca.albumes');
});

Route::get('/collection/artists',function (){
    return view('Biblioteca.artistas');
});

Route::get('/collection/podcasts',function (){
    return view('Biblioteca.podcast');
});

Route::post('/login', 'Usuarios@IniciarSesion');
Route::post('/register', 'Usuarios@Registrarusuario');


