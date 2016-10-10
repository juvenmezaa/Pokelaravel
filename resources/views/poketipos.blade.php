@extends("principal")
@section("encabezado")
<h2>Pokédex Tipos</h2>
@stop
@section("contenido")
<section id="resultadospokedex">
	<form action="{{url('/pokedex/tipo')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group col-md-3">
			<select class="form-control" name="tipo">
				@foreach($tipos as $t)
					<option value="{{$t->id}}">{{$t->nombre}}</option>
				@endforeach
			</select>
		</div>
		<input type="submit" value="Go" class="btn btn-primary">
	</form>
</section>
@stop