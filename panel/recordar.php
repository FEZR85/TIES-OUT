<html>
	<head>
		<title>Recordar contraseña</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/index.css">
		<?php include_once("imports.php"); ?>
	</head>
	<body>
		<!--Contenido de la página de Login-->
		<div class="contentSesion text-center">
			<h2><img src="img/logoTieOut.png" alt="Logo" width="35em" >  TIES-OUT</h2>
			<h3 class="encabezado">Iniciar Sesión</h3><br>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="correo" class="col-xs-4 control-label">Correo </label>
					<div class="col-xs-5">
						<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
					</div>	
				</div>
				
				<div class="form-group">
					<div class="col-xs-10">
						<button id="enviar" class="btn btn-primary" type="submit">Enviar</button>
					</div>
				</div>
			</form>
		</div>
		<footer id="footer">
		  	<div class="container text-center">
		    	<p class="text-muted credit">TIES-OUT © 2016 | Contacto: contacto@ties-out.com</p>
		  	</div>
		</footer>
	</body>
</html>