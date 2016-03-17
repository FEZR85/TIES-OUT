<html>
	<head>
		<title>Métodos de Ordenamiento</title>
		<link rel="stylesheet" type="" href="../css/cursos.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<?php include_once("../imports.php"); ?>
	</head>

	<body>
		<?php include_once('../header.php'); ?>
		<aside id="tablaContenido">
			<ol id="temas">
				<li>
					<a href="#introduccion" class="tema">
						Introducción
					</a>
				</li>
				<li>
					<a href="<?php echo ROOTPATH ?>/cursos/curso2clasificacion.php"class="tema">
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
					<a href="<?php echo ROOTPATH ?>/cursos/curso2estabilidad.php"class="tema">
						Estabilidad
					</a>
				</li>
			</ol>
		</aside>

		<div class="content2">
			<section class = "encabezado">
				<h2>METODOS DE ORDENAMIENTO</h2><br />				
			</section>
			<section class="contenido" id="introduccion">
				<h3 >Introducción</h3>
				
				<p align="justify">
					En computación y matematicas un <b>algoritmo de ordenamiento</b> es un algoritmo que pone elementos 
					de una lista o un vector en una secuencia dada por una relación de orden, es decir, el resultado 
					de salida ha de ser una permutación de la entrada que satisfaga la relación de orden dada. Las 
					relaciones de orden más usadas son el orden numérico y el orden lexicográfico. Ordenamientos 
					eficientes son importantes para optimizar el uso de otros algoritmos (como los de búsqueda y 
					fusión) que requieren listas ordenadas para una ejecución rápida. También es útil para poner 
					datos en forma canónica y para generar resultados legibles por humanos.
				</p>
				<p  align="justify">
					Desde los comienzos de la computación, el problema del ordenamiento ha atraído gran cantidad 
					de investigación, tal vez debido a la complejidad de resolverlo eficientemente a pesar de su 
					planteamiento simple y familiar. Por ejemplo, BubbleSort fue analizado desde 1956. Aunque muchos 
					puedan considerarlo un problema resuelto, nuevos y útiles algoritmos de ordenamiento se siguen 
					inventado hasta el día de hoy (por ejemplo, el ordenamiento de biblioteca se publicó por primera 
					vez en el 2004).
				</p>
				<p>
					Los algoritmos de ordenamiento son comunes en las clases introductorias a la computación, donde 
					la abundancia de algoritmos para el problema proporciona una gentil introducción a la variedad 
					de conceptos núcleo de los algoritmos, como notación de O mayúscula, algoritmos divide y vencerás, 
					estructuras de datos, análisis de los casos peor, mejor, y promedio, y límites inferiores.
				</p>
			</section>
			<div class="btnNavegaCurso">				
				<a class="btn btn-primary" href="<?php echo ROOTPATH ?>/cursos/curso2clasificacion.php" >Siguiente</a>
			</div>
			<?php include_once('../footerTips.php'); ?>	
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>