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
					<div class="row">
						<div class="col-xs-offset-3 col-xs-6">
							<form class="form-horizontal col-xs-12" role="form" >			
								<div class="form-group">
									<label for="nombre" >Nombre:</label>
									<input type="text" class="form-control" name="nombre" id="nombre" />
								</div>
								<div class="form-group">
									<label for="correo" class=" control-label">Correo:</label>		
									<input type="text" class="form-control" name="correo" id="correo" />
								</div>
								<div class="form-group">
									<label for="mensaje" class=" control-label">Mensaje:</label>
									<textarea class="form-control" name="mensaje" id="mensaje"></textarea>
								</div>
								
								<div class="form-group">
									<div class="">
										<button id="login" class="btn btn-primary" type="submit">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
			<?php include_once('../footer.php'); ?>
	</body>
</html>