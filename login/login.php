<html>
	<head>
		<title>TIES-OUT::Iniciar sesión</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
		<?php include_once("../imports.php"); ?>
	</head>
	<body>
		<?php  include_once("../header.php"); ?>
		<!--Contenido de la página de Login-->
		<div class="content">
			<div class="center-block">
				<h3 class="encabezado">Iniciar Sesión</h3><br>
				<div class="row">
						<div class="col-xs-offset-3 col-xs-6">
							<form class="form-horizontal col-xs-12" role="form">
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
											<h4>¿Olvidaste tu contraseña?</h4>
											<span><a class="btn-link" href="<?php echo ROOTPATH ?>/login/recuperar.php" >Haz clic aquí</a>
											para cambiar tu contraseña</span>
								</div>
							</form>
						</div>
					</div>
			</div>
			
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>