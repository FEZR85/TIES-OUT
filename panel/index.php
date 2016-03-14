<html>
	<head>
		<title>Iniciar sesión</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/index.css">
		<?php include_once("imports.php"); ?>
	</head>
	<body>
		<!--Contenido de la página de Login-->
		<div class="contentSesion">
			<h2><img src="img/logoTieOut.png" alt="Logo" width="35em" >  TIES-OUT</h2>
			<h3 class="encabezado text-center">Iniciar Sesión</h3><br>
			<div class="row">
				<form class="form-horizontal col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-9 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" role="form">
					<div class="form-group">
						<label for="correo">Correo </label>
							<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />	
					</div>
					<div class="form-group">							
						<label for="password">Contraseña </label>
							<input id="password" class="form-control" type="password" placeholder="contraseña" />		
					</div>
					
					<div class="form-group text-center">
							<button id="login" class="btn btn-primary" type="submit">Iniciar sesión</button>
					</div>
					<div class="form-group text-center">
							<b>¿Olvidaste tu contraseña?</b>
							<span><a class="btn-link" href="<?php echo ROOTPATH ?>/recordar.php" >Haz clic aquí</a>
							para cambiar tu contraseña</span>
					</div>
				</form>
			</div>
		</div>
		<footer id="footer">
		  	<div class="container text-center">
		    	<p class="text-muted credit">TIES-OUT © 2016 | Contacto: contacto@ties-out.com</p>
		  	</div>
		</footer>
	</body>
</html>