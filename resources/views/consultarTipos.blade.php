@extends("principal")
@section("encabezado")
	<h2>Consultar Tipos</h2>
@stop
@section("contenido")
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tipos as $t)
				<tr>
					<td>{{$t->id}}</td>
					<td>{{$t->nombre}}</td>
					<td>
						<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop
