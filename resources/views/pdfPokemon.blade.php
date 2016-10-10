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
						<td>Numero</td>
						<td>{{$pokemon->id}}</td>
					</tr>
					<tr>
						<td>Peso</td>
						<td>{{$pokemon->peso}}</td>
					</tr>
					<tr>
						<td>Altura</td>
						<td>{{$pokemon->altura}}</td>
					</tr>
					<tr>
						<td>PC</td>
						<td>{{$pokemon->pc}}</td>
					</tr>
					<tr>
						<td>PS</td>
						<td>{{$pokemon->ps}}</td>
					</tr>
					<tr>
						<td>Polvos</td>
						<td>{{$pokemon->polvos}}</td>
					</tr>
				</table>
			</div>
		</figure>
	</div>
</body>
</html>