<html>
	<head>
		<title>Iniciar sesión</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
		<link rel="stylesheet" type="text/css" href="../js/social/bootstrap-social.css">
		<link rel="stylesheet" href="../js/social/assets/css/font-awesome.css">
		<?php include_once("../imports.php"); ?>
	</head>
	<body>
		<?php  include_once("../header.php"); ?>
		<!--Contenido de la página de Login-->
		<div class="content">
			<div class="center-block">
				<h3 class="encabezado">Iniciar Sesión</h3><br>
				<div class="row">
					<form class="form-horizontal col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" role="form">
						<div class="form-group">
							<label for="correo" >Correo </label>
								<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />
						</div>
						<div class="form-group">							
							<label for="password" >Contraseña </label>
								<input class="form-control" type="password" placeholder="contraseña" />	
						</div>
								
						<div class="form-group text-center">									
							<button id="login" class="btn btn-primary" type="submit">Iniciar sesión</button>
							<span> | ¿No estás registrado?</span>
							<a class="btn btn-link" href="<?php echo ROOTPATH ?>/login/registro.php">Registrate</a>
							<br><br>
							<span>¿Olvidaste tu contraseña?</span>
							<span>
								<a class="btn-link" href="<?php echo ROOTPATH ?>/login/recuperar.php" >Haz clic aquí</a>
											para cambiar tu contraseña</span>
						</div>

						<div class="form-group text-center">
							<a class="btn btn-block btn-social btn-twitter">
	    						<span class="fa fa-twitter">    									
	    						</span> Inicia Sesión con Twitter
  							</a>

  							<a class="btn btn-block btn-social btn-facebook">
	    						<span class="fa fa-facebook">    									
	    						</span> Inicia Sesión con Facebook
  								</a>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>