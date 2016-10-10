@extends("principal")
@section("encabezado")
<h2></h2>
@stop
@section("contenido")
<div class="display">
	<figure class="figpokeinfo">
		<div id="tituloinfo"><h1><span class="titulopok">{{$pokemon->nombre}}</span></h1></div>
		<section class="info_pokemon">
			<article><img src="../img/{{$pokemon->imagen}}" alt="{{$pokemon->nombre}}" width="90%"></article>
			<article>
				<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus debitis cupiditate nisi dolore aut dolor quae officia vitae ad accusamus tempora fugiat ullam molestias eius laborum hic similique beatae, officiis.</div>
				<div class="datos">
					<table id="tblinfopk" width="100%">
						<tr>
							<th class="sptd">Numero</th>
							<th class="sptd">Peso</th>

						</tr>
						<tr>
							<td>#{{$pokemon->id}}</td>
							<td>{{$pokemon->peso}}</td>
						</tr>
						<tr>
							<th class="sptd">Altura</th>
							<th class="sptd">PC</th>
						</tr>
						<tr>
							<td>{{$pokemon->altura}}</td>
							<td>{{$pokemon->pc}}</td>
						</tr>
						<tr>
							<th class="sptd">PS</th>
							<th class="sptd">Polvos</th>
						</tr>
						<tr>
							<td>{{$pokemon->ps}}</td>
							<td>{{$pokemon->polvos}}</td>
						</tr>
					</table>

				</div>
			</article>
		</section>
		<div id="divtipos">
			<article>
				<a href="{{url('pdfPokemon')}}/{{$pokemon->id}}"><span id="pdfinfopk" class="glyphicon glyphicon-save-file"></span></a>
			</article>
			<article>
				<b>Tipos</b>
				<ul>
					@foreach($tipos as $t) 
					<li>
						<figure class="sptipo t{{$t->id}}">
							{{$t->nombre}}
						</figure>
					</li>
					@endforeach
				</ul>
			</article>


		</div>
	</figure>
</div>	
@stop