@extends("principal")
@section("encabezado")
	<h2>Registrar Pokémon</h2>
@stop
@section("contenido")
	<form action="{{url('/guardarPokemon')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="numero">Numero</label>
			<input type="number" min="1" class="form-control" name="numero">
		</div>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="form-group">
			<label for="nombre">Tipo</label>
			<div class="checkbox">
	          @foreach($tipos as $t)
	          	<label>
	            	<input type="checkbox" name="tipo[]" value="{{$t->id}}"> {{$t->nombre}}
	          	</label>
	          @endforeach
	        </div>
		</div>
		<div class="form-group">
			<label for="peso">Peso</label>
			<input type="number" min="0" class="form-control" name="peso">
		</div>
		<div class="form-group">
			<label for="altura">Altura</label>
			<input type="number" min="0" class="form-control" name="altura">
		</div>
		<div class="form-group">
			<label for="pc">PC</label>
			<input type="number" min="0" class="form-control" name="pc">
		</div>
		<div class="form-group">
			<label for="ps">PS</label>
			<input type="number" min="0" class="form-control" name="ps">
		</div>
		<div class="form-group">
			<label for="imagen">Imagen</label>
			<input type="file" min="0" class="form-control" name="imagen">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary">
			<a href="{{url('/consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
		</div>
	</form>
@stop