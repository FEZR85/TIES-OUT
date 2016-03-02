<html>
	<head>
			<title>TIES-OUT::Contacto</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<link rel="stylesheet" type="text/css" href="../css/login.css">
			<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
			<?php include_once("../imports.php"); ?>
	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<div class="content">
				<div class="center-block">
					<h3 class="encabezado">Contacto</h3>
					<h4 class="text-muted subencabezado">Ponte en contacto con nosotros, resolveremos tus dudas, tomaremos en cuenta tus opiniones,y haremos una retrospectiva a tus comentarios para mejorar este sitio.</h4><br>
					
					<form class="form-horizontal" role="form">
						
						<div class="form-group">
							<label for="nombre" class="col-xs-2 control-label">Nombre:</label>
							<div class="col-xs-4">
								<input type="text" class="form-control" name="nombre" id="nombre" />
							</div>
						</div>
						<div class="form-group">
							<label for="correo" class="col-xs-2 control-label">Correo:</label>
							<div class="col-xs-4">
								<input type="text" class="form-control" name="correo" id="correo" />
							</div>
						</div>
						<div class="form-group">
							<label for="mensaje" class="col-xs-2 control-label">Mensaje:</label>
							<div class="col-xs-4">
								<textarea class="form-control" name="mensaje" id="mensaje"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-4">
								<button id="login" class="btn btn-primary" type="submit">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				<?php include_once('../footer.php'); ?>
			</div>
	</body>
</html>