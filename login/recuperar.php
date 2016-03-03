<html>
	<head>
		<title>TIES-OUT::Cambiar contraseña</title>
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
				<h3 class="encabezado">Cambiar contraseña</h3><br>
				
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="correo" class="col-xs-2 control-label">Correo </label>
						<div class="col-xs-4">
							<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
						</div>	
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-4">
							<a id="login" class="btn btn-default" href="<?php echo ROOTPATH ?>/login/login.php">Iniciar sesión</a>
							<button id="recuperar" class="btn btn-primary" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>