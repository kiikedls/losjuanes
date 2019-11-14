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
    return view('reproductor');
});
route::get('/rep',function (){
    return view('repro');
});

Route::get('/browse/featured',function (){
    return view('interfaz');
});

Route::get('/settings/account', function() {
    return view('usuario');
});

Route::get('/settings/account/logout', 'Usuarios@cerrarSesion');

Route::get('/collection/playlists',function (){
    return view('biblioteca.playlists');
});

Route::get('/collection/made-for-you',function (){
    return view('biblioteca.especialparati');
});

Route::get('/collection/tracks',function (){
    return view('biblioteca.cancionesquetegustan');
});

Route::get('/collection/albums',function (){
    return view('biblioteca.albumes');
});

Route::get('/collection/artists',function (){
    return view('biblioteca.artistas');
});

Route::get('/collection/podcasts',function (){
    return view('biblioteca.podcast');
});

Route::post('/login', 'Usuarios@IniciarSesion');
Route::post('/register', 'Usuarios@Registrarusuario');


Route::get('/search',function()
{
    return view('search');
});

Route::post('/buscar','Usuarios@buscar');