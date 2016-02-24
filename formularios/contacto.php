<html>
	<head>
			<title>TIES-OUT::Contacto</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<?php include_once("../imports.php"); ?>
	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<div class="content">
				<h3>Contacto</h3>
				<h4>Ponte en contacto con nosotros, resolveremos tus dudas, tomaremos en cuenta tus opiniones,
					y haremos una retrospectiva a tus comentarios para mejorar este sitio.</h4><br>
				
				<form class="form-horizontal" role="form">
					
					<div class="form-group">
						<label for="nombre" class="col-md-2 control-label">Nombre:</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nombre" id="nombre" />
						</div>
					</div>
					<div class="form-group">
						<label for="correo" class="col-md-2 control-label">Correo:</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="correo" id="correo" />
						</div>
					</div>
					<div class="form-group">
						<label for="mensaje" class="col-md-2 control-label">Mensaje:</label>
						<div class="col-md-4">
							<textarea class="form-control" name="mensaje" id="mensaje"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-offset-2 col-md-4">
							<button id="login" class="btn btn-default" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
	</body>
</html>