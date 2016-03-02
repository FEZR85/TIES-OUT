<!DOCTYPE html>
<html>
	<head>
		<title>TIES-OUT::Mis Cursos</title>
		<link rel="shortcut icon" href="/img/logoTieOut.ico" type="image/x-icon" /> 	
		<link rel="stylesheet" type="text/css" href="css/repertorio.css">
		<link rel="stylesheet" type="text/css" href="css/encabezados.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include_once("imports.php"); ?>
	
	</head>
<body>
	<?php  include_once("header.php"); ?>
	<div class="content misCursos">
		<h2 class="text-center encabezado" >Mis Cursos</h2>
		<section class="cursos"style="padding:0em 3em 0em;">
			<table class="table table-bordered">
				<thead>
					<th width="10%">#</th>
					<th width="50%">Título</th>
					<th width="20%">Avance</th>
					<th width="20%">Acciones</th>
				</thead>
				<tbody>
					<tr>
						<th>1</th>
						<td>Árboles</td>
						<td>65%</td>
						<td>
							<a href="#">A</a>
							<a href="#"></a>
							<a href="#"></a>
						</td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id="recomendaciones" style="padding: 2em 3em 0em; ">
			<h3 class="text-center">Otros cursos disponibles</h3>
			<div class="row" style="padding:0 1em 0;">
				<div class="col-md-4 verde" style="height: 15em; padding-left: 2em;" >
					<article>					
						<h3>Árboles</h3>
						<p>Un árbol es una estructura no lineal en la que cada nodo puede apuntar a uno o varios nodos. También se suele dar una definición...</p>
						<a class="btn btn-default" href="formularios/curso1.php" role="button">Ver más...</a>
					</article>
				</div>
				<div class="col-md-4 cafe" style=" height: 15em; padding-left: 2em;" >
					<article>					
						<h3>Árboles</h3>
						<p>Un árbol es una estructura no lineal en la que cada nodo puede apuntar a uno o varios nodos. También se suele dar una definición...</p>
						<a class="btn btn-default" href="formularios/curso1.php" role="button">Ver más...</a>
					</article>
				</div>
				<div class="col-md-4 naranja" style="height: 15em; padding-left: 2em;" >
					<article>					
						<h3>Árboles</h3>
						<p>Un árbol es una estructura no lineal en la que cada nodo puede apuntar a uno o varios nodos. También se suele dar una definición...</p>
						<a class="btn btn-default" href="formularios/curso1.php" role="button">Ver más...</a>
					</article>
				</div>
			</div>
		</section>
		<?php include_once('footer.php'); ?>
	</div>
</body>
</html>