<html>
	<head>
		<title>TIES-OUT::Iniciar sesión</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<?php include_once("../imports.php"); ?>
	</head>
	<body>
		<?php  include_once("../header.php"); ?>
		<!--Contenido de la página de Login-->
		<div class="content">
			<div class="center-block">
				<h3>Iniciar Sesión</h3><br>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="correo" class="col-xs-2 control-label">Correo </label>
						<div class="col-xs-4">
							<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
						</div>	
					</div>
					<div class="form-group">							
						<label for="password" class="col-xs-2 control-label">Contraseña </label>
						<div class="col-xs-4">
							<input class="form-control" type="password" placeholder="contraseña" />		
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-4">
							<button id="login" class="btn btn-primary" type="submit">Iniciar sesión</button>
							<span> | ¿No estás registrado?</span>
							<a class="btn btn-link" href="<?php echo ROOTPATH ?>/login/registro.php">Registrate</a>
							<br><br>
								<h4>¿Olvidaste tu contraseña?</h4>
								<span><a class="btn-link" href="<?php echo ROOTPATH ?>/login/recuperar.php" >Haz clic aquí</a>
								para cambiar tu contraseña</span>
						</div>
					</div>
				</form>
			</div>
			<?php include_once('../footer.php'); ?>
		</div>
	</body>
</html>