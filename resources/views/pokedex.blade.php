@extends("principal")
@section("encabezado")
<h2>Pokédex</h2>
@stop
@section("contenido")
<section id="resultadospokedex">
	<ul>
		@foreach($pokemon as $p)
		<li>
			<figure id="">
				<a href="{{url('/pokemon')}}/{{$p->id}}">
				<img src="img/{{$p->imagen}}" alt="{{$p->nombre}}" width="200px">
				</a>
			</figure>
			<div id="info">
				<p><b>#{{$p->id}}</b></p>
				<p>{{$p->nombre}}</p>
				<span class="glyphicon glyphicon-download-alt"></span>
			</div>
		</li>
		@endforeach
	</ul>
	<div id="paginas">
		{!! $pokemon->render() !!}
	</div>
</section>


@stop