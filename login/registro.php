<html>
	<head>
			<title>TIES-OUT::Registrarse</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<?php include_once("../imports.php"); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../css/login.css">
			<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<!--Contenido de la página registro-->
			<div class="content">
				<div class="center-block">
					<h3 class="encabezado">Registro</h3><br>
					
					<form class="form-horizontal" role="form">
					
						<div class="form-group">
							<label for="nombre" class="col-xs-2 control-label">Nombre </label>
							<div class="col-xs-4">
								<input id="nombre" class="form-control" type="text"placeholder="Juan López Ortega"  />	
							</div>
						</div>
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
							<label for="Rptpassword" class="col-xs-2 control-label">Repetir contraseña </label>
							<div class="col-xs-4">						
								<input class="form-control" type="Rptpassword" placeholder="contraseña" />
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-4">
								<button id="registro" class="btn btn-primary" type="submit">Registrarse</button>
								<span> | ¿Ya estás registrado?</span>
								<a class="btn btn-link" href="<?php echo ROOTPATH ?>/login/login.php">Inicia Sesión</a>
								
							</div>
						</div>
						
					</form>
				</div>
				
			</div>
			<?php include_once('../footer.php'); ?>
	</body>
</html>