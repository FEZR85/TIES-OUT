<html>
	<head>
		<title>Métodos de Ordenamiento</title>
		<?php include_once("imports.php"); ?>
		<link rel="stylesheet" type="" href="<?php echo ROOTPATH ?>/recursos/css/cursos.css">
		<link rel="shortcut icon" href="<?php echo ROOTPATH ?>/recursos/img/logoTieOut.ico" type="image/x-icon" /> 		
	</head>

	<body>
		<?php include_once('header.php'); ?>
		<?php include_once('menuCurso2.php'); ?>

		<div class="content2">
			<section class = "encabezado">
				<h2>MÉTODOS DE ORDENAMIENTO</h2><br />				
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
				<p  align="justify">
					Los algoritmos de ordenamiento son comunes en las clases introductorias a la computación, donde 
					la abundancia de algoritmos para el problema proporciona una gentil introducción a la variedad 
					de conceptos núcleo de los algoritmos, como notación de O mayúscula, algoritmos divide y vencerás, 
					estructuras de datos, análisis de los casos peor, mejor, y promedio, y límites inferiores.
				</p>
			</section>
			
			<div class="row navegar">
				<div class="col-lg-12">
					<ul class="pager">
						<li class="previous">
						</li>
						<li class="next">
							<a href="curso2clasificacion.php">
								Siguiente
								<i class="glyphicon glyphicon-arrow-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<?php include_once('footerTips.php'); ?>	
		</div>
		<?php include_once('footer.php'); ?>
	</body>
</html>