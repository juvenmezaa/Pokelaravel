@extends("principal")
@section("encabezado")
	<h2>Actualizar Tipos</h2>
@stop
@section("contenido")
	<style>
		body{background-image: url("{{asset('img/fondo.png')}}"); background-size: 80%;}
	</style>
	<form action="{{url('/actualizaTipo')}}/{{$tipo->id}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" value="{{$tipo->nombre}}">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary">
			<a href="{{url('/consultarTipos')}}" class="btn btn-danger">Cancelar</a>
		</div>
	</form>
@stop