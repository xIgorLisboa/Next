<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jogadores/novo', 'App\Http\Controllers\JogadoresController@create');
Route::post('/jogadores/novo', 'App\Http\Controllers\JogadoresController@jogadores')->name('registrar_jogador');
Route::get('/jogadores/ver/{id}', 'App\Http\Controllers\JogadoresController@show');
Route::get('/jogadores/editar/{id}', 'App\Http\Controllers\JogadoresController@edit');
Route::post('/jogadores/editar/{id}', 'App\Http\Controllers\JogadoresController@update')->name('editar_jogador');
Route::post('/jogadores/excluir/{id}', 'App\Http\Controllers\JogadoresController@delete');
Route::get('/jogadores/excluir/{id}', 'App\Http\Controllers\JogadoresController@delete');
Route::post('/jogadores/excluir/{id}', 'App\Http\Controllers\JogadoresController@destroy')->name('excluir_jogador');


Route::get('/times/novo', 'App\Http\Controllers\TimesController@create');
Route::post('/times/novo', 'App\Http\Controllers\TimesController@times')->name('registrar_times');
Route::get('/times/ver/{id}', 'App\Http\Controllers\TimesController@show');
Route::get('/times/editar/{id}', 'App\Http\Controllers\TimesController@edit');
Route::post('/times/editar/{id}', 'App\Http\Controllers\TimesController@update')->name('editar_times');
Route::get('/times/excluir/{id}', 'App\Http\Controllers\TimesController@delete');
Route::post('/times/excluir/{id}', 'App\Http\Controllers\TimesController@destroy')->name('excluir_times');

Route::get('/partidas/novo', 'App\Http\Controllers\PartidasController@create');
Route::post('/partidas/novo', 'App\Http\Controllers\PartidasController@partidas')->name('registrar_partidas');
Route::get('/partidas/ver/{id}', 'App\Http\Controllers\TimesController@show');
Route::get('/partidas/editar/{id}', 'App\Http\Controllers\PartidasController@edit');
Route::post('/partidas/editar/{id}', 'App\Http\Controllers\PartidasController@update')->name('editar_partidas');
Route::post('/partidas/excluir/{id}', 'App\Http\Controllers\PartidasController@delete');
Route::get('/partidas/excluir/{id}', 'App\Http\Controllers\PartidasController@delete');
Route::post('/partidas/excluir/{id}', 'App\Http\Controllers\PartidasController@destroy')->name('excluir_partidas');

