<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/pdfestilo.css">
	<title>¿Quien es ese pokemon?</title>
</head>
<body>
	<div id="carta">
		<figure>
			<div id="headdiv">
				<br>
				<span id="sppok">#{{$pokemon->id}}</span>
				<span id="sppok">{{$pokemon->nombre}}</span>
				<span id="spPC">PC</span>
				<span id="pc">{{$pokemon->pc}}</span>
				
			</div>
			<div>
				<img src="img/qeep.jpeg" width="90%">
				<img src="img/{{$pokemon->imagen}}" alt="{{$pokemon->nombre}}" width="60%" class="imgpk">
			</div>
			<div id="divtabla">
				<table id="tblinfo">
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
				<br>
				<div id="infotipos">
					<ul>
					@foreach($tipos as $t) 
					<li>
						<figure class="sptipo {{$t->id}}">
							{{$t->nombre}}
						</figure>
					</li>
					@endforeach
					</ul>
			</div>
		</figure>
		<br>&nbsp;
		
	</div>
</body>
</html>