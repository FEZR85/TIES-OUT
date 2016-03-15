<html>
	<head>
		<title>Métodos de Ordenamiento</title>
		<link rel="stylesheet" type="" href="../css/curso1.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
		<?php include_once("../imports.php"); ?>
	</head>

	<body>
		<?php include_once('../header.php'); ?>
		<aside id="tablaContenido">
			<ol id="temas">
				<li>
					<a href="<?php echo ROOTPATH ?>/formularios/curso2.php" class="tema">
						Introducción
					</a>
				</li>
				<li>
					<a href="<?php echo ROOTPATH ?>/formularios/curso2clasificacion.php"class="tema">
						Clasificación
					</a>
					<ol>
						<li> Método burbuja
						</li>
						<li> Método shell
						</li>
						<li> Método por inserción
						</li>
						<li> Método de selección
						</li>
					</ol>
				</li>
				<li>
					<a href="#estabilidad"class="tema">
						Estabilidad
					</a>
				</li>
			</ol>
		</aside>

		<div class="content2">
			<div>
				<section class = "encabezado">
					<h2>METODOS DE ORDENAMIENTO</h2><br />				
				</section>
			</div>

			<div>
				<div class="siguiente text-center">
					<a href="#estabilidad" class="glyphicon glyphicon-chevron-down" ></a>
				</div>
				<section id="estabilidad" class="contenido">
					<h3>Estabilidad</h3></br>

					<p align="justify">
						Los algoritmos de ordenamiento estable mantienen un relativo preorden total. Esto significa que un 
						algoritmo es estable solo cuando hay dos registros R y S con la misma clave y con R apareciendo 
						antes que S en la lista original.
					</p>
					<p align="justify">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum scelerisque nisi in bibendum. 
						Aenean euismod in arcu vel porttitor. Sed commodo eros nibh, non elementum massa rutrum a. Proin 
						egestas mi urna, eget sollicitudin sem luctus vel. Proin ut quam rhoncus, finibus neque sed, auctor 
						sapien. Fusce eleifend orci at ligula volutpat, nec commodo est vulputate. Cras in justo turpis. 
						Aliquam erat volutpat. Vivamus viverra ex nibh, aliquet ultricies purus placerat facilisis. Proin 
						consectetur orci et elit suscipit sagittis. Donec fermentum vitae nibh sit amet ultrices. Nullam 
						euismod magna ac lobortis venenatis.
					</p>
					<p>
						Sed venenatis lacus nec tellus congue convallis. Pellentesque nec diam eu lacus ultricies suscipit 
						eu nec velit. Suspendisse ultrices augue et arcu semper euismod. Vivamus nec ipsum est. Sed ut 
						bibendum purus, sed vehicula erat. Mauris et orci eget ex commodo congue. Nulla auctor accumsan 
						varius. Vivamus sed risus lacus.
					</p>
					<p>
						Praesent ut leo eget leo consequat vulputate eu vel lorem. Praesent ultricies augue ut gravida 
						tempor. Donec semper ac justo ut tempus. Aenean eget felis nisi. Donec dolor neque, vestibulum 
						at massa vel, ultrices dignissim odio. Integer nunc orci, tincidunt cursus tortor a, condimentum 
						eleifend augue. Proin ultrices fermentum quam, at pretium lorem rhoncus at. Donec aliquam volutpat 
						lectus, tincidunt feugiat nisi laoreet quis.
					</p>
					<p>
						Sed vel enim iaculis, tristique diam at, rutrum nisi. In tincidunt sapien eu diam convallis, 
						in vestibulum nulla porta. Aliquam finibus nulla ac mattis tristique. Ut porttitor posuere luctus. 
						Integer nec dignissim quam. Nunc posuere tincidunt auctor. Fusce in commodo nibh. Sed vel metus 
						lacus. Quisque gravida nisl eros, sed auctor orci tincidunt non. Etiam in cursus enim. Nullam 
						tristique eros at ligula cursus fringilla. Cras ornare semper lacinia.
					</p>
					<p>
						Pellentesque quis malesuada dui. Fusce pellentesque suscipit felis, sed fermentum magna sagittis 
						nec. Maecenas diam mi, accumsan vel ullamcorper non, blandit id turpis. Etiam malesuada eu sem 
						vitae mattis. Curabitur condimentum mollis eros, nec lacinia sem placerat et. Quisque interdum 
						turpis in felis accumsan, eu ultricies leo elementum. Vivamus non mi enim. Sed gravida fringilla 
						justo.
					</p>
				</section>
				<a class="btn btn-default" href="<?php echo ROOTPATH ?>/formularios/curso2clasificacion.php" ><< Anterior</a>
			</div>
			<?php include_once('../footerTips.php'); ?>	
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>