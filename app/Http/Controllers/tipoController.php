<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class tipoController extends Controller
{
	public function registrarTipo(){
    	return view("registrarTipo");
    }
    public function guardar(Request $request){
		$nombre = $request -> input("nombre");
		//Guardar en BD

		$nuevo = new tipoModel;
		$nuevo->nombre = $nombre;
		$nuevo->save();

		return Redirect('/registrarTipo');
    }
    public function consultar(){
    	$tipos=DB::table('tipo')->paginate(5);
    	return view("consultarTipos", compact("tipos"));
    }
}
