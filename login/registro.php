<html>
	<head>
			<title>TIES-OUT::Registrarse</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<?php include_once("../imports.php"); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../css/login.css">
			<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
			<link rel="stylesheet" type="text/css" href="../js/social/bootstrap-social.css">
			<link rel="stylesheet" href="../js/social/assets/css/font-awesome.css">

	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<!--Contenido de la página registro-->
			<div class="content">
				<div class="center-block">
					<h3 class="encabezado">Registro</h3><br>
					<div class="row">
						<form class="form-horizontal col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" role="form">
						
							<div class="form-group">
								<label for="nombre" >Nombre </label>								
									<input id="nombre" class="form-control" type="text"placeholder="Juan López Ortega"  />	
							</div>
							<div class="form-group">
								<label for="correo" >Correo </label>
									<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
							</div>
							<div class="form-group">							
								<label for="password" >Contraseña </label>
									<input class="form-control" type="password" placeholder="contraseña" />		
							</div>
							<div class="form-group">
								<label for="Rptpassword" >Repetir contraseña </label>
									<input class="form-control" type="Rptpassword" placeholder="contraseña" />
							</div>														
							<div class="form-group text-center">
									<button id="registro" class="btn btn-primary" type="submit">Registrarse</button>
									<span> | ¿Ya estás registrado?</span>
									<a class="btn btn-link" href="<?php echo ROOTPATH ?>/login/login.php">Inicia Sesión</a>
							</div>
							
							<div class="form-group text-center">
								<a class="btn btn-block btn-social btn-twitter">
	    							<span class="fa fa-twitter">    									
	    							</span> Registrate con Twitter
  								</a>

  								<a class="btn btn-block btn-social btn-facebook">
	    							<span class="fa fa-facebook">    									
	    							</span> Registrate con Facebook
  								</a>
							</div>
						</form>
					</div>
				</div>
				
			</div>
			<?php include_once('../footer.php'); ?>
	</body>
</html>