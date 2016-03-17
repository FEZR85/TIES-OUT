<html>
	<head>
			<title>Registrarse</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<?php include_once("../imports.php"); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../css/sesion.css">
			<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/js/social/bootstrap-social.css">
			<link rel="stylesheet" href="<?php echo ROOTPATH ?>/js/social/assets/css/font-awesome.css">
	</head>
	<body>
		<?php include_once('../header.php'); ?>
		<!--Contenido de la página registro-->
		<div class="content">
			<div class="center-block">
				<h3 class="encabezado">Registro</h3><br>
				<div class="row">
					<form id="registrar" name="registrar" class="form-horizontal col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4" role="form" novalidate>
						<div class="form-group">
							<label for="nombre" >Nombre </label>								
							<input id="nombre" class="form-control" type="text" placeholder="Juan López Ortega"  />	
							<span id="errorNombre" class="clsError"></span>
						</div>
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
						<div class="form-group">
							<label for="rptContrasena" >Repetir contraseña </label>
							<input id="rptContrasena" class="form-control" type="password" placeholder="contraseña" />
							<span id="errorRptContrasena" class="clsError"></span>	
						</div>
						<div class="form-group text-center">
							<button id="registro" class="btn btn-primary" type="submit">Registrarse</button>
						</div>
					</form>
					<div class="form-group col-xs-offset-1 col-xs-10  col-sm-offset-2 col-sm-8 col-md-offset-3 col-md- col-lg-offset-4 col-lg-4">
						<span>¿Ya estás registrado?</span>
						<a class="btn btn-link" href="<?php echo ROOTPATH ?>/sesion/sesion.php"><b>Inicia Sesión</b></a>
					</div>
					
					<div class="form-group col-xs-offset-1 col-xs-10  col-sm-offset-2 col-sm-8 col-md-offset-3 col-md- col-lg-offset-4 col-lg-4">
						<a class="btn btn-block btn-social btn-twitter">
							<span class="fa fa-twitter">  									
							</span> Registrate con Twitter  
	  					</a>
	
	  					<a class="btn btn-block btn-social btn-facebook">
							<span class="fa fa-facebook">    									
							</span> Registrate con Facebook
	  					</a>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>