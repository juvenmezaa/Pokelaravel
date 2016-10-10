@extends("principal")
@section("encabezado")
<h2>Pokédex</h2>
@stop
@section("contenido")
<section id="resultadospokedex">
	@if(isset($pokemon[0]->nomTipo))
		<h3>{{$pokemon[0]->nomTipo}}</h3>
	@endif
	<ul>
		@foreach($pokemon as $p)
		<li>
			<figure class="figpokedex">
			<!--	<a href="{{url('/pokemon')}}/{{$p->id}}">-->
					<a href="{{url('/pokemon')}}/{{$p->id}}">
				<input type="hidden" value="{{$p->id}}" name="id_pok">
				<img src="{{asset('img')}}/{{$p->imagen}}" alt="{{$p->nombre}}" width="200px">
				</a>
			</figure>
			<div id="info">
				<p><b>#{{$p->id}}</b></p>
				<p>{{$p->nombre}}</p>
				<a href="{{url('pdfPokemon')}}/{{$p->id}}"><span class="glyphicon glyphicon-save-file"></span></a>
			</div>
		</li>
		@endforeach
	</ul>
	<div id="paginas">
		{!! $pokemon->render() !!}
	</div>
</section>


@stop