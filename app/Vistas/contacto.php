<html>
	<head>
			<title>Contacto</title>
			<?php include_once("imports.php"); ?>
			<link rel="shortcut icon" href="<?php echo ROOTPATH ?>/recursos/img/logoTieOut.ico" type="image/x-icon" /> 			
			<link rel="stylesheet" type="text/css" href="<?php echo ROOTPATH ?>/recursos/css/sesion.css">
	</head>
	<body>
		<?php include_once('header.php'); ?>
		<div class="content">
			<h2 class="encabezado">Contacto</h2>
			<h4 class="text-muted subencabezado">
				Ponte en contacto con nosotros, resolveremos 
				tus dudas, tomaremos en cuenta tus opiniones,y 
				haremos una retrospectiva a tus comentarios 
				para mejorar este sitio.
			</h4><br>
			<div class="row">
				<form method="post" id="formulario" name="contacto" class="form-horizontal col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" role="form" novalidate >			
					<div class="form-group">
						<label for="nombre" >Nombre:</label>
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Juan López Ortega" />
						<span id="errorNombre" class="clsError"></span>
					</div>
					<div class="form-group">
						<label for="correo" class=" control-label">Correo:</label>		
						<input type="text" class="form-control" name="correo" id="correo" placeholder="alguien@ejemplo" />
						<span id="errorCorreo" class="clsError"></span>
					</div>
					<div class="form-group">
						<label for="mensaje" class=" control-label">Mensaje:</label>
						<textarea class="form-control" name="mensaje" id="mensaje" placeholder="Escriba su mensaje aquí"></textarea>
					</div>
					
					<div class="form-group">
						<div class="">
							<button id="contactar" class="btn btn-primary" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php include_once('footer.php'); ?>
		<script type="text/javascript" src="<?php echo ROOTPATH ?>/recursos/js/valida.js" ></script>
	</body>
</html>