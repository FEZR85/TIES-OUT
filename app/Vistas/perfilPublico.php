<html>
	<head>
			<title>Perfil de {nombreUsuario}</title>			
			<?php include_once('imports.php'); ?>
			<link rel="shortcut icon" href="recursos/img/logoTieOut.ico" type="image/x-icon" /> 
			<link rel="stylesheet" type="text/css" href="recursos/css/repertorio.css">
			<link rel="stylesheet" type="text/css" href="recursos/css/perfil.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			<?php //include_once('header.php'); ?>
			<!--Contenido de la página-->
			<div class="content">
				<h3 class=" encabezado">Perfil de {nombreUsuario}</h3>
				<div class="row">
				<section class="infoPersonal col-md-4" >
						<figure class="foto">
							<img id="fotoperfil" alt="Sin Foto" src="{fotoUsuario}">	
						</figure>
						<br>
						<ul class="listaInfo">
							<br>			
							<li><span>Correo: {correoUsuario}</span></li>
							<li><span>Cumpleaños: {cumpleUsuario}</span></li>
							<li><span>Ocupación: {ocupacionUsuario}</span></li>
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
						<!--{iniciaCurso}-->
						<a href="{urlCurso}">
							<article class="col-md-12 {colorRandom}">
								<h3>{Titulo}</h3>							
							</article>
						</a>
						<!--{terminaCurso}-->
					</div>
				</section>
				</div>						
			</div>
			<?php include_once('footer.php'); ?>
	</body>
</html>