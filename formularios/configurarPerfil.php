<html>
	<head>
			<title>TIES-OUT::Perfil</title>
			<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
			<?php include_once("../imports.php"); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			<?php include_once('../header.php'); ?>
			<!--Contenido de la página registro-->
			<div class="content">
				<h3>Configurar perfil</h3><br>
				
				<form class="form-horizontal" role="form">
					<div class="inline" style="clear:both;">
						<div class="form-group col-md-6">
							<div class="form-group">
								<label for="nombre" class="col-md-4 control-label">Nombre </label>
								<div class="col-md-7">
									<input readonly="readonly" id="nombre" class="form-control" type="text"placeholder="Juan López Ortega"  />	
								</div>
							</div>
							<div class="form-group">
								<label for="correo" class="col-md-4 control-label">Correo </label>
								<div class="col-md-7">
									<input readonly="readonly" id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
								</div>	
							</div>
							<div class="form-group">
								<label for="ocupacion" class="col-md-4 control-label">Ocupación</label>
								<div class="col-md-7">
									<input id="ocupacion" name="ocupacion" class="form-control" type="text">
								</div>	
							</div>
							<div class="form-group">
								<label for="descripcion" class="col-md-4 control-label">Descripción</label>
								<div class="col-md-7">
									<textarea  id="descripcion" class="form-control" type="text"></textarea>
								</div>	
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="foto" class="col-md-4 control-label">Foto de perfil</label>
							<div id="kv-avatar-errors" class="center-block" style="width:800px;display:none"></div>
							
							    <div class="kv-avatar center-block" style="width:200px">
							        <input id="avatar" name="avatar" type="file" class="file-loading">
							    </div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-12">
							<button id="cancelar" class="btn btn-danger" type="submit">Cancelar</button>
							<button id="guardar" class="btn btn-default" type="submit">Guardar</button>
						</div>
					</div>
					
				</form>
			</div>
	</body>
</html>