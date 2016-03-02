<html>
	<head>
			<title>TIES-OUT::Perfil</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
			<?php include_once("../imports.php"); ?>
			<link type="text/css" rel="stylesheet" href="../css/confPerfil.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<!--Contenido de la página registro-->
			<div class="content">
				<h3 class=" encabezado">Configurar perfil</h3>
				<form class="form-horizontal col-xs-offset-1" role="form">
					<div class="inline" style="clear:both;">
						<div class="form-group col-xs-6">
							<div class="form-group">
								<label for="nombre" class="col-xs-4 control-label">Nombre </label>
								<div class="col-xs-7">
									<input readonly="readonly" id="nombre" class="form-control" type="text" />	
								</div>
							</div>
							<div class="form-group">
								<label for="correo" class="col-xs-4 control-label">Correo </label>
								<div class="col-xs-7">
									<input readonly="readonly" id="correo" class="form-control" type="email" />			
								</div>	
							</div>
							<div class="form-group">
								<label for="nacimiento" class="col-xs-4 control-label">Fecha de nacimiento </label>
								<div class="col-xs-7">
									<input id="nacimiento" name="nacimiento" class="form-control" type="text">
								</div>	
							</div>
							<div class="form-group">
								<label for="sexo" class="col-xs-4 control-label">Sexo </label>
								<div class="col-xs-7">
									<select id="sexo" name="sexo" class="form-control" type="text">
										<option value="0">Seleccionar</option>
										<option value="1">Femenino</option>
										<option value="2">Masculino</option>
									</select>
								</div>	
							</div>
							<div class="form-group">
								<label for="ocupacion" class="col-xs-4 control-label">Ocupación </label>
								<div class="col-xs-7">
									<input id="ocupacion" name="ocupacion" class="form-control" type="text">
								</div>	
							</div>
							<div class="form-group">
								<label for="descripcion" class="col-xs-4 control-label">Descripción </label>
								<div class="col-xs-7">
									<textarea  id="descripcion" class="form-control" type="text"></textarea>
								</div>	
							</div>
						</div>
						<div class="form-group col-xs-6">
							<label for="foto" class="col-xs-4 control-label">Foto de perfil</label>
							<figure>
								<img id="avatar" alt="Sin Foto" src="<?php echo ROOTPATH ?>/img/linkedin.png">
								<figcaption class="col-xs-offset-3 col-xs-7 input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Examinar...
											<input id="foto" size="1" name="foto" type="file" onclick="imagen.click(); ruta.value=imagen.value">
										</span>
									</span>
									<input type="text" name="imagen" readonly="readonly" class="form-control" >
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-12">
							<button id="guardar" class="btn btn-primary" type="submit">Guardar</button>
						</div>
					</div>
					
				</form>
				<?php include_once('../footer.php'); ?>
			</div>
	</body>
</html>