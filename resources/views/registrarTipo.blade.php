@extends("principal")
@section("encabezado")
	<h2>Registrar Tipo</h2>
@stop
@section("contenido")
	<form action="{{url('/guardarTipo')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary">
			<a href="{{url('/consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
		</div>
	</form>
@stop