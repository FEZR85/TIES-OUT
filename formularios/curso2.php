<html>
	<head>
		<title>TIES-OUT::Árboles</title>
		<link rel="stylesheet" type="" href="../css/curso1.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
		<?php include_once("../imports.php"); ?>
	</head>

	<body>
		<?php include_once('../header.php'); ?>


		<aside id="inscribete">
			<div style="display: none;">
				<span>¿No est&aacute;s registrado en &eacute;ste curso?</span><br />
				<a class="btn btn-warning btn-lg" href="<?php echo ROOTPATH ?>/login/registro.php">Reg&iacute;strate</a><br />
			</div>
			
			<ol id="temas">
				<li>
					<a href="#introduccion">
						Introducción
					</a>
				</li>
				<li>
					<a href="#clasificacion">
						Clasificación
					</a>
				</li>
				<li>
					<a href="#estabilidad">
						Estabilidad
					</a>
				</li>

			</ol>
		</aside>

		<div class="content">
			<div>
				<section class = "encabezado">
					<h2>METODOS DE ORDENAMIENTO</h2><br />				
				</section>
			</div>

			<div>
				<section class="contenido" id="introduccion">
					<h3 >Introducción</h3><br/>
					
					<p align="justify">
						En computación y matematicas un algoritmo de ordenamiento es un algoritmo que pone elementos de una lista o un vector en una secuencia dada por una relación de orden, es decir, el resultado de salida ha de ser una permutación de la entrada que satisfaga la relación de orden dada. Las relaciones de orden más usadas son el orden numérico y el orden lexicográfico. Ordenamientos eficientes son importantes para optimizar el uso de otros algoritmos (como los de búsqueda y fusión) que requieren listas ordenadas para una ejecución rápida. También es útil para poner datos en forma canónica y para generar resultados legibles por humanos.
					</p></br>
					<p  align="justify">
						Desde los comienzos de la computación, el problema del ordenamiento ha atraído gran cantidad de investigación, tal vez debido a la complejidad de resolverlo eficientemente a pesar de su planteamiento simple y familiar. Por ejemplo, BubbleSort fue analizado desde 1956. Aunque muchos puedan considerarlo un problema resuelto, nuevos y útiles algoritmos de ordenamiento se siguen inventado hasta el día de hoy (por ejemplo, el ordenamiento de biblioteca se publicó por primera vez en el 2004).</br>
						Los algoritmos de ordenamiento son comunes en las clases introductorias a la computación, donde la abundancia de algoritmos para el problema proporciona una gentil introducción a la variedad de conceptos núcleo de los algoritmos, como notación de O mayúscula, algoritmos divide y vencerás, estructuras de datos, análisis de los casos peor, mejor, y promedio, y límites inferiores.
					</p></br>

				</section>

				<section class="separador"></section>

				<section id="clasificacion" class="contenido">
					
					<h3>Clasificación</h3></br>

					<p align="justify">
						Los algoritmos de ordenamiento se pueden clasificar en las siguientes maneras:
					</p></br>

					<div id = "lista">
						<p align="justify">La más común es clasificar según el lugar donde se realice la ordenación</p>
						<ul>
							<li align="justify">Algoritmos de ordenamiento interno: en la memoria del ordenador.</li>
							<li align="justify">Algoritmos de ordenamiento externo: en un lugar externo como un disco duro.</li>
						</ul></br>

						<p align="justify">Por el tiempo que tardan en realizar la ordenación, dadas entradas ya ordenadas o inversamente ordenadas:
						</p>
						<ul>
							<li align="justify">Algoritmos de ordenación natural: Tarda lo mínimo posible cuando la entrada está ordenada.</li>
							<li align="justify">Algoritmos de ordenación no natural: Tarda lo mínimo posible cuando la entrada está inversamente ordenada.</li>
						</ul></br>

						<p align="justify">
							Por estabilidad: un ordenamiento estable mantiene el orden relativo que tenían originalmente los elementos con claves iguales. Por ejemplo, si una lista ordenada por fecha se reordena en orden alfabético con un algoritmo estable, todos los elementos cuya clave alfabética sea la misma quedarán en orden de fecha. Otro caso sería cuando no interesan las mayúsculas y minúsculas, pero se quiere que si una clave aBC estaba antes que AbC, en el resultado ambas claves aparezcan juntas y en el orden original: aBC, AbC.</br>
							Cuando los elementos son indistinguibles (porque cada elemento se ordena por la clave completa) la estabilidad no interesa. Los algoritmos de ordenamiento que no son estables se pueden implementar para que sí lo sean. Una manera de hacer esto es modificar artificialmente la clave de ordenamiento de modo que la posición original en la lista participe del ordenamiento en caso de coincidencia.
						</p></br>

						<p align="justify">Los algoritmos se distinguen por las siguientes características:</p>	
						<ul>
							<li align="justify">Complejidad computacional (peor caso, caso promedio y mejor caso) en términos de n, el tamaño de la lista o arreglo. Para esto se usa el concepto de orden de una función y se usa la notación O(n). El mejor comportamiento para ordenar (si no se aprovecha la estructura de las claves) es O(n log n). Los algoritmos más simples son cuadráticos, es decir O(n²). Los algoritmos que aprovechan la estructura de las claves de ordenamiento (p. ej. bucket sort) pueden ordenar en O(kn) donde k es el tamaño del espacio de claves. Como dicho tamaño es conocido a priori, se puede decir que estos algoritmos tienen un desempeño lineal, es decir O(n).</li>
							<li align="justify">Uso de memoria y otros recursos computacionales. También se usa la notación O(n).</li>
						</ul></br>

					</div>

					
				</section>

				<section id="estabilidad" class="contenido">
					
					<h3>Estabilidad</h3></br>

					<p align="justify">
						Los algoritmos de ordenamiento estable mantienen un relativo preorden total. Esto significa que un algoritmo es estable solo cuando hay dos registros R y S con la misma clave y con R apareciendo antes que S en la lista original.
					</p>

					<p align="justify">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum scelerisque nisi in bibendum. Aenean euismod in arcu vel porttitor. Sed commodo eros nibh, non elementum massa rutrum a. Proin egestas mi urna, eget sollicitudin sem luctus vel. Proin ut quam rhoncus, finibus neque sed, auctor sapien. Fusce eleifend orci at ligula volutpat, nec commodo est vulputate. Cras in justo turpis. Aliquam erat volutpat. Vivamus viverra ex nibh, aliquet ultricies purus placerat facilisis. Proin consectetur orci et elit suscipit sagittis. Donec fermentum vitae nibh sit amet ultrices. Nullam euismod magna ac lobortis venenatis.</br></br>

						Sed venenatis lacus nec tellus congue convallis. Pellentesque nec diam eu lacus ultricies suscipit eu nec velit. Suspendisse ultrices augue et arcu semper euismod. Vivamus nec ipsum est. Sed ut bibendum purus, sed vehicula erat. Mauris et orci eget ex commodo congue. Nulla auctor accumsan varius. Vivamus sed risus lacus.</br></br>

						Praesent ut leo eget leo consequat vulputate eu vel lorem. Praesent ultricies augue ut gravida tempor. Donec semper ac justo ut tempus. Aenean eget felis nisi. Donec dolor neque, vestibulum at massa vel, ultrices dignissim odio. Integer nunc orci, tincidunt cursus tortor a, condimentum eleifend augue. Proin ultrices fermentum quam, at pretium lorem rhoncus at. Donec aliquam volutpat lectus, tincidunt feugiat nisi laoreet quis.</br></br>

						Sed vel enim iaculis, tristique diam at, rutrum nisi. In tincidunt sapien eu diam convallis, in vestibulum nulla porta. Aliquam finibus nulla ac mattis tristique. Ut porttitor posuere luctus. Integer nec dignissim quam. Nunc posuere tincidunt auctor. Fusce in commodo nibh. Sed vel metus lacus. Quisque gravida nisl eros, sed auctor orci tincidunt non. Etiam in cursus enim. Nullam tristique eros at ligula cursus fringilla. Cras ornare semper lacinia.</br></br>

						Pellentesque quis malesuada dui. Fusce pellentesque suscipit felis, sed fermentum magna sagittis nec. Maecenas diam mi, accumsan vel ullamcorper non, blandit id turpis. Etiam malesuada eu sem vitae mattis. Curabitur condimentum mollis eros, nec lacinia sem placerat et. Quisque interdum turpis in felis accumsan, eu ultricies leo elementum. Vivamus non mi enim. Sed gravida fringilla justo.</br></br>
					</p>
				</section>

			</div>
			<?php include_once('../footerTips.php'); ?>	
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>