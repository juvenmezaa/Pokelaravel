<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pokemonModel;
use App\tipoModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pokemonController extends Controller
{
    public function registrarPokemon(){
    	$tipos=tipoModel::all();
    	return view("registrarPokemon", compact("tipos"));
    }
    public function guardar(Request $request){
		dd($request);

		return Redirect('/registrarPokemon');
    }
}
