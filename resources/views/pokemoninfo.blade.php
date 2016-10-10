@extends("principal")
@section("encabezado")
<h2></h2>
@stop
@section("contenido")
<figure class="figpokeinfo">
	<div id="tituloinfo"><h2><span class="titulopok">{{$pokemon->nombre}}</span></h2></div>
	<section class="info_pokemon">
		<article><img src="../img/{{$pokemon->imagen}}" alt="{{$pokemon->nombre}}"></article>
		<article>
			<div>datos1</div>
			<div class="datos">datos 2</div>
		</article>
	</section>
</figure>
@stop