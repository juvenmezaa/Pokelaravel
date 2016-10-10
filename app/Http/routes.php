<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'principalController@index');
Route::get('/registrarPokemon', 'pokemonController@registrarPokemon');
Route::post('/guardarPokemon', 'pokemonController@guardar');
Route::get('/pokedex', 'pokemonController@pokedex');

Route::get('/pokemon/{id}/', 'pokemonController@pokeinfo');
//Route::get('/pokemon', 'pokemonController@pokeinfo');
Route::get('/pdfPokemon/{id}', 'pokemonController@pdfPokemon');

Route::get('/registrarTipo', 'tipoController@registrarTipo');
Route::post('/guardarTipo ', 'tipoController@guardar');
Route::get('/consultarTipos', 'tipoController@consultar');
Route::get('/eliminarTipo/{id}', 'tipoController@eliminar');
Route::get('/actualizarTipo/{id}', 'tipoController@actualizarTipo');
Route::post('/actualizaTipo/{id}', 'tipoController@actualizar');

Route::get('/pokedex/tipos', 'pokemonController@poketipos');
Route::post('/pokedex/tipo', 'pokemonController@poketipo');
Route::get('/pokedex/{id}', 'pokemonController@pokedex2');

Route::post('/buscar', 'pokemonController@buscar');
Route::get('/darPoder/{id}', 'pokemonController@darPoder');
