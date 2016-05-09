<html>
	<head>
			<title>Configurar Perfil</title>
			<?php include_once("app/Vistas/imports.php"); ?>
			<link rel="shortcut icon" href="recursos/img/logoTieOut.ico" type="image/x-icon" /> 			
			<link type="text/css" rel="stylesheet" href="recursos/css/confPerfil.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include_once('app/Vistas/header.php'); ?>
		<!--Contenido de la página registro-->
		<div class="content">
			<h3 class=" encabezado">Configurar perfil</h3>
			<div class="row">
			<form method="post" id="perfil" name="perfil" class="form-horizontal col-xs-offset-1 col-xs-11 col-sm-offset-1 col-sm-11 col-md-offset-1 col-md-11 col-lg-offset-1 col-lg-11" role="form" novalidate >

				<div id="img" class="page-wrap form-group col-xs-10 col-sm-10 col-md-6 col-lg-6">
					<label for="foto">Foto de perfil</label><br>
							<span>Arrastra y suelta o da clic en examinar</span>
					<figure class="profile">
						<div class="profile-avatar-wrap">
							<img class="img img-responsive" id="avatar" alt="Sin Foto" src="<?php echo ROOTPATH ?>/img/noimg.png">
						</div>
						<figcaption class="input-group  col-xs-10 col-sm-10 col-md-8 col-lg-8" style="clear:both">
							<span class="input-group-btn">
								<span class="btn btn-default btn-file">
									Examinar...
									<input id="imagen" size="1" name="foto" type="file" onclick="ruta.value=imagen.value">
								</span>
							</span>
							<input id="ruta" type="text" name="ruta" readonly="readonly" class="form-control" >					
						</figcaption>
					</figure><br>
					<div class="form-group col-xs-11 col-sm-11 col-md-10 col-lg-10">
						<label for="nombre">Nombre </label>
							<input readonly="readonly" id="nombre" class="form-control" type="text" />	
					</div>		
				</div>		
				
				<div id="datos" class="form-group col-xs-10 col-sm-8 col-md-6 col-lg-4">
					
					<div class="form-group">
						<label for="correo">Correo </label>
							<input readonly="readonly" id="correo" class="form-control" type="email" />	
					</div>
					<div class="form-group">
						<label for="nacimiento">Fecha de nacimiento </label>
							<input id="nacimiento" name="nacimiento" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="sexo">Sexo </label>
							<select id="sexo" name="sexo" class="form-control" type="text">
								<option value="0">Seleccionar</option>
								<option value="1">Femenino</option>
								<option value="2">Masculino</option>
							</select>
					</div>
					<div class="form-group">
						<label for="ocupacion">Ocupación </label>
							<input id="ocupacion" name="ocupacion" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción </label>
							<textarea  id="descripcion" class="form-control" type="text"></textarea>
					</div>
				</div>
				<div class="form-group" style="clear:both;">
					<div>
						<button id="guardar" class="btn btn-primary" type="submit">Guardar</button>
					</div>
				</div>
			</form>		
			</div>
		</div>
		<?php include_once('app/Vistas/footer.php'); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="recursos/js/resample.js"></script>
		<script src="recursos/js/avatar.js"></script>
	</body>
</html>