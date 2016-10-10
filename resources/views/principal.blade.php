<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
	<link rel="shortcut icon" href="favicon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
</head>
<body background="img/fondo.png" style="background-size: 80%;">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('/img/pokemon.png')}}" alt="Pokémon"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Opciones <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
		        <li><a href="{{url('/consultarTipos')}}">Consultar Tipos</a></li>
	            <li class="divider"></li>
		        <li><a href="{{url('/registrarTipo')}}">Registrar Tipo</a></li>
		        <li><a href="{{url('/registrarPokemon')}}">Registrar Pokémon</a></li>
	          </ul>
	        </li>
	        <li><a href="{{url('/pokedex')}}"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Pokédex</a></li>
	      </ul>
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Pokémon">
	        </div>
	        <button type="submit" class="btn btn-default">Go</button>
	      </form>
	    </div>
	  </div>
	</nav>
	<div class="container">
	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				@yield('encabezado')
				<hr>
				@yield('contenido')
			</div>
		</div>
	</div>
	<footer>
		<hr>
		<center>Ingenieria Web &copy; 2016 <br>&copy; The Pokémon Company / Nintendo</center>
	</footer>
	<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>