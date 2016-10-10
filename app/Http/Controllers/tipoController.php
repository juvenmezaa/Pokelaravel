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
    public function eliminar($id){
        tipoModel::find($id)->delete();
        return Redirect("/consultarTipos");
    }
    public function actualizarTipo($id){
        $tipo=tipoModel::find($id);
        return view("actualizarTipo", compact("tipo"));
    }
    public function actualizar($id, Request $request){
        $tipo=tipoModel::find($id);
        $tipo->nombre = $request->input("nombre");
        $tipo->save();
        return Redirect("/consultarTipos");
        
    }
}
