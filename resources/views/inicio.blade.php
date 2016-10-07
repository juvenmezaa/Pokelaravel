@extends('principal')
@section('encabezado')
	<h2>Inicio</h2>
@stop
@section('contenido')
	<div class="jumbotron">
		<div class="col-sm-3">
			<img src="img/hola.png" alt="Bienvenido" style="margin-left:-70px; margin-top: -10px; width:300px;">
		</div>
		<div class="col-sm-offset-3">
			<h1>Poképroyecto Laravel</h1>
	  		<p>Este sistema es el resultado de utilizar el Framework Laravel en su versión 5.2 para gestionar Pokémon de diversos tipos. Logrando aprender un poco de estas peculiares creaturas.</p>
	  		<p><a class="btn btn-primary btn-lg" href="{{url('')}}">Comenzar</a></p>
		</div>
	  
	</div>
@stop