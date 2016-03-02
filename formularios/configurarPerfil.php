<html>
	<head>
			<title>TIES-OUT::Perfil</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
			<?php include_once("../imports.php"); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<!--Contenido de la página registro-->
			<div class="content">
				<h3 class="encabezado">Configurar perfil</h3><br>
				
				<form class="form-horizontal" role="form">
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
								<label for="ocupacion" class="col-xs-4 control-label">Ocupación</label>
								<div class="col-xs-7">
									<input id="ocupacion" name="ocupacion" class="form-control" type="text">
								</div>	
							</div>
							<div class="form-group">
								<label for="descripcion" class="col-xs-4 control-label">Descripción</label>
								<div class="col-xs-7">
									<textarea  id="descripcion" class="form-control" type="text"></textarea>
								</div>	
							</div>
						</div>
						<div class="form-group col-xs-6">
							<label for="foto" class="col-xs-4 control-label">Foto de perfil</label>
							<div id="kv-avatar-errors" class="center-block" style="width:800px;display:none"></div>
							
							    <div class="kv-avatar center-block" style="width:200px">
							        <input id="avatar" name="avatar" type="file" class="file-loading">
							    </div>
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