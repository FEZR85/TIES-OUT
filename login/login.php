<html>
	<head>
		<title>TIES-OUT</title>
		<link rel="stylesheet" type="" href="../css/registro.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include_once("../imports.php"); ?>
	</head>
	<body>
		<?php  include_once("../header.php"); ?>
		<!--Contenido de la página de Login-->
		<div class="content">
			<h3>Iniciar Sesión</h3><br>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="correo" class="col-md-2 control-label">Correo </label>
					<div class="col-md-4">
						<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
					</div>	
				</div>
				<div class="form-group">							
					<label for="password" class="col-md-2 control-label">Contraseña </label>
					<div class="col-md-4">
						<input class="form-control" type="password" placeholder="contraseña" />		
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-offset-2 col-md-4">
						<button id="login" class="btn btn-default" type="submit">Iniciar sesión</button>
						<span> | ¿No estás registrado?</span>
						<a class="btn btn-link" href="<?php echo ROOTPATH ?>/login/registro.php">Registrate</a>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>