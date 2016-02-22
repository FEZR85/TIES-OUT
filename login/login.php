<html>
	<head>
		<title>TIES-OUT</title>
		<link rel="stylesheet" type="" href="../css/registro.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<?php include_once("../imports.php"); ?>
	</head>
	<body>
		<?php  include_once("../header.php"); ?>
		<!--Contenido de la página de Login-->
		<section class="acceso">
				<h3>Iniciar Sesión<br></br></h3>
				<section class="formulario">					
					<label for="" id="correo">Correo</label>		<!--label-->			
					<input type="email" placeholder="alguien@ejemplo.com" />					
					<label id="contrasena" for="">Contraseña </label>
					<input type="password" placeholder="Contraseña" />					
				</section>
				<section class="opciones">
					<button type="submit">Iniciar Sesión</button>
					<a href="#" >Recuperar contraseña</a><br>
					<span>
						 | ¿No tienes cuenta?
					</span>
					<a href="registro.html">Registrate</a>
				</section>
		</section>
	</body>
</html>