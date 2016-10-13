<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pokemonModel;
use App\tipoModel;
use App\itemModel;
use App\pokemon_tipo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class pokemonController extends Controller
{
    public function registrarPokemon(){
        $item=itemModel::find(1);
    	$tipos=tipoModel::all();
    	return view("registrarPokemon", compact("tipos","item"));
    }
    public function guardar(Request $request){
		

		$numero=$request->input('numero');
		$nombre=$request->input('nombre');
		$tipo=$request->input('tipo');
		$peso=$request->input('peso');
		$altura=$request->input('altura');
		$pc=$request->input('pc');
		$ps=$request->input('ps');
		$imagen=$request->input('imagen');

		//guardar en bd
		$nuevo=new pokemonModel;
		$nuevo->id=$numero;
		$nuevo->nombre=$nombre;
    	$nuevo->peso=$peso;
    	$nuevo->altura=$altura;
    	$nuevo->pc=$pc;
    	$nuevo->ps=$ps;
    	$nuevo->polvos='100';
    	$nuevo->imagen=$imagen;
    	$nuevo->save();
        foreach ($tipo as $t) {
            $nuevoTP=new pokemon_tipo;
            $nuevoTP->idPokemon=$numero;
            $nuevoTP->idTipo=$t;
            $nuevoTP->save();
        }
    	

		return Redirect('/registrarPokemon');
    }

   	public function pokedex(){
        $item=itemModel::find(1);
        $pokemon=DB::table('pokemon')->paginate(5);
   		return view("pokedex", compact("pokemon", "item"));
   	}

    public function poketipos(){
        $item=itemModel::find(1);
        $tipos=DB::table("tipo AS t")->join("pokemon_tipo AS pt", "t.id","=","pt.idTipo")->select("t.*")->distinct()->get();
        return view("poketipos", compact("tipos","item"));
    }
    public function poketipo(Request $request){
        $tipo = $request->input("tipo");
        return Redirect("/pokedex/$tipo");
    }
    public function pokedex2($idTipo){
        $item=itemModel::find(1);
        $pokemon=DB::table("pokemon AS p")->join("pokemon_tipo AS pt", "p.id","=","pt.idPokemon")->join("tipo as t","pt.idTipo","=","t.id")->where("pt.idTipo","=", $idTipo)->select("p.*","t.nombre as nomTipo")->distinct()->paginate(5);
        return view("pokedex", compact("pokemon","item"));
    }

    /*public function pokeinfo($id){
         $pokemon=pokemonModel::find($id);
         return view("pokemoninfo", compact("pokemon"));
    }*/
    public function pokeinfo($id){
         $item=itemModel::find(1);
         $pokemon=pokemonModel::find($id);
         $tipos=DB::table("tipo AS t")->join("pokemon_tipo AS pt", "t.id","=","pt.idTipo")->where("pt.idPokemon","=", $id)->select("t.nombre","t.id")->get();
        
         return view("pokemoninfo", compact("pokemon","tipos","item"));
    }

    public function pdfPokemon($id){
        $pokemon=pokemonModel::find($id);
        $tipos=DB::table("tipo AS t")->join("pokemon_tipo AS pt", "t.id","=","pt.idTipo")->where("pt.idPokemon","=", $id)->select("t.nombre","t.id")->get();
        $vista=view('pdfPokemon', compact('pokemon','tipos'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }
    public function buscar(Request $req){
        $nombre  = $req->input("search");
        $pokemon=DB::table("pokemon AS p")->where("p.nombre","=", $nombre)->select("p.id")->get();
        $id;
        foreach ($pokemon as $p) {
            $id=$p->id;
        }
        if(!isset($id)){
            return back()->withInput();
        }
        return Redirect("/pokemon/$id");
    }
    public function darPoder($id){
        $pokemon=pokemonModel::find($id);
        $item=itemModel::find(1);
        $polvos=$item->polvos;
        $caramelos=$item->caramelos;
        $polvosPok=$pokemon->polvos;
        $ps=$pokemon->ps;
        $pc=$pokemon->pc;


        if($caramelos<1)
            return back()->withInput();
        if($polvos<$polvosPok)
            return back()->withInput();
        $item->polvos=$polvos-$polvosPok;
        $item->caramelos=$caramelos-1;
        $item->save();
        $pokemon->ps= $ps+5;
        $pokemon->pc= $pc+40;
        $pokemon->save();
        return back()->withInput();
    }
}
