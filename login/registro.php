<html>
<head>
		<title>TIES-OUT</title>
		<link rel="stylesheet" type="" href="../css/registro.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<?php include_once("../imports.php"); ?>
</head>
<body>
		<?php include_once('../header.php'); ?>
		<!--Contenido de la página registro-->
		<section class="acceso">
				<h3>Registro<br></br></h3>
				<section class="formulario">
					<p>Nombre </p>
						<input type="text"placeholder="Juan López Ortega" maxlength="50"  />
					<p>Usuario </p>					
						<input type="text" placeholder="usuario" maxlength="20" />					
					<p>Contraseña </p>
						<input type="password" placeholder="contraseña" />
					<p>Correo </p>
						<input type="email" placeholder="alguien@ejemplo.com" maxlength="100" />
					<!--<p>Foto</p>
						<input type="text" />-->
					<p>Descripción </p>
						<textarea placeholder="E.j. Amante de la programación web (js, php) de frameworks como bootstrap y angular" maxlength="500"></textarea>
					<p>Ocupación </p>
						<input type="text" placeholder="E.j. Ing. en computación" />
				</section>
				<section class="opciones">
					<button type="submit">Registrarse</button>
					<p>
						 | ¿Ya estás registrado?
					</p>
					<a href="login.html">Inicia Sesión</a>
				</section>
		</section>
</body>
</html>