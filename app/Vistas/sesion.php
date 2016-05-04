<html>
	<head>
		<title>Iniciar sesión</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<?php include_once("imports.php"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="/TIES-OUT/recursos/css/sesion.css"/>
		<link rel="stylesheet" type="text/css" href="/TIES-OUT/recursos/js/social/bootstrap-social.css"/>
		<link rel="stylesheet" type="text/css" href="/TIES-OUT/recursos/js/social/assets/css/font-awesome.css">
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<!--Contenido de la página de sesion-->
		<div class="content">
			<h3 class="encabezado">Iniciar Sesión</h3><br>
			<div id="contacto" class="row">
				<form id="formulario" name="iniciaSesion" 
						class="form-horizontal col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4" 
						role="form" novalidate>
					<div class="form-group">
						<label for="correo" >Correo </label>
						<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />
						<span id="errorCorreo" class="clsError"></span>
					</div>
					<div class="form-group">							
						<label for="contrasena" >Contraseña </label>
						<input id="contrasena" class="form-control" type="password" placeholder="contraseña" />	
						<span id="errorContrasena" class="clsError"></span>
					</div>
					
					<!-- botones y enlaces -->
					<div class="form-group text-center">									
						<button id="iniciar" name="iniciar" class="btn btn-primary" type="submit">Iniciar sesión</button>
					</div>
				</form>
				<div class="form-group col-xs-offset-1 col-xs-10  col-sm-offset-2 col-sm-8 col-md-offset-3 col-md- col-lg-offset-4 col-lg-4">
					<span>¿No estás registrado?</span>
					<a class="btn btn-link" href="registro.php"><b>Registrate</b></a>
					<br>
					<span>¿Olvidaste tu contraseña?</span>
					<span>
						<a class="btn-link" href="recuperar.php" ><b>Haz clic aquí</b></a>
						para cambiar tu contraseña
					</span>
				</div>
				<div class="form-group col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
					<button id="twitter" type="button" class="btn btn-block btn-social btn-twitter">
						<span class="fa fa-twitter"></span> Inicia Sesión con Twitter
  					</button>

  					<button id="facebook" type="button" class="btn btn-block btn-social btn-facebook">
						<span class="fa fa-facebook"></span> Inicia Sesión con Facebook
  					</button>
				</div>
			</div>
		</div>
		<?php include_once('footer.php'); ?>
		<script type="text/javascript" src="/TIES-OUT/recursos/js/valida.js" ></script>
	</body>
</html>