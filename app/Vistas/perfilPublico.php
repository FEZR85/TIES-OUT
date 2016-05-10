<html>
	<head>
			<title>Perfil de Fulanito</title>			
			<?php include_once('imports.php'); ?>
			<link rel="shortcut icon" href="../../recursos/img/logoTieOut.ico" type="image/x-icon" /> 
			<link rel="stylesheet" type="text/css" href="../../recursos/css/repertorio.css">
			<link rel="stylesheet" type="text/css" href="../../recursos/css/perfil.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			<?php include_once('header.php'); ?>
			<!--Contenido de la página-->
			<div class="content">
				<h3 class=" encabezado">Perfil de Fulanito</h3>
				<div class="row">
				<section class="infoPersonal col-md-4" >
						<figure class="foto">
							<img id="fotoperfil" alt="Sin Foto" src="../../recursos/img/noimg.png">	
						</figure>
						<br>
						<ul class="listaInfo">
							<br>			
							<li><span>Correo: fulanitokun@gmail.com</span></li>
							<li><span>Cumpleaños: 02 de Octubre</span></li>
							<li><span>Ocupación: Estudiante</span></li>
						</ul>
						<section class="actions">
								<br>
								<a href="#">Agregar </a>|
								<a href="#"> Enviar correo</a>			
						</section>
				</section>
				<section class="cursosCompletados col-md-8">
					<h2>Cursos terminados</h2>
					<div class="row">
						<a href="<?php echo ROOTPATH ?>/curso1.php">
							<article class="col-md-12 naranja">
								<h3>Árboles</h3>							
							</article>
						</a>
						<a href="<?php echo ROOTPATH ?>/curso2.php">
							<article class="col-md-12 verde">
								<h3>Métodos de Ordenamiento</h3>							
							</article>
						</a>
						<a href="<?php echo ROOTPATH ?>/curso1.php">
							<article class="col-md-12 azul">
								<h3>Árboles</h3>							
							</article>
						</a>
						<a href="<?php echo ROOTPATH ?>/curso2.php">
							<article class="col-md-12 naranja">
								<h3>Métodos de Ordenamiento</h3>							
							</article>
						</a>
					</div>
				</section>
				</div>						
			</div>
			<?php include_once('footer.php'); ?>
	</body>
</html>