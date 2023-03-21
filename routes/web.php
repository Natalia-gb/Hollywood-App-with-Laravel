<?php

use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/ActorView', function () {
    return view('ActorView');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ver', function(){
    return view('ver');
});

Route::get('/editar', function(){
    return view('/editar');
});

Route::get('/borrar', function(){
    return view('/borrar');
});

Route::get('/update', function(){
    return view('/update');
});

Route::get('/crear', function(){
    return view('/crear');
});

Route::get('/actualizadoCrear', function(){
    return view('/actualizadoCrear');
});

Route::get('/verPeliculas', function(){
    return view('/verPeliculas');
});

Route::get('/inicio', 'ActorController@index');
// Route::post('ver', 'ActorController@verID')->name('ver');
Route::POST('borrar', 'Actorcontroller@borrar')->name('borrar');
Route::post('editar', 'ActorController@editar')->name('editar');
Route::post('ver', 'ActorController@verActor')->name('ver');
Route::post('update', 'ActorController@update')->name('update');
Route::get('crear', 'ActorController@crear')->name('crear');
Route::post('actualizadoCrear', 'ActorController@actualizadoCrear')->name('actualizadoCrear');
Route::get('editarGET/{id}', 'ActorController@editarGET')->name('editarGET');
Route::get('verGET/{id}', 'ActorController@verGET')->name('verGET');
Route::get('ordenarASC', 'ActorController@ordenarASC')->name('ordenarASC');
Route::get('ordenarDESC', 'ActorController@ordenarDESC')->name('ordenarDESC');
Route::get('verPeliculas/{idPelicula}', 'FilmController@verPeliculas')->name('verPeliculas');