<html>
<head>
		<title>TIES-OUT</title>
		<?php include_once("imports.php")?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
		<?php  include_once("header.php"); ?>
		<div class="content">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>
			 
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item">
			      <img src="http://placehold.it/1200x315/379C06/fff/?text=Registrate!" alt="...">
			      <div class="carousel-caption">
			          <h3>Ahora tus cursos en tus redes sociales</h3>
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://placehold.it/1200x315/095272/fff/?text=Buscar+empleo" alt="...">
			      <div class="carousel-caption">
			          <h3>Busca el trabajo que siempre estuviste esperando</h3>
			      </div>
			    </div>
			    <div class="item active">
			      <img src="http://placehold.it/1200x315/B43807/fff/?text=¡NUEVO+CURSO!" alt="...">
			      <div class="carousel-caption">
			          <h3>Algoritmos y estructuras de árboles</h3>
			      </div>
			    </div>
			  </div>
			 
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div> <!-- Carousel -->
		
			<hr>
			<section class="form-group">
				<h2>Los cursos más nuevos</h2>
				<article class="seccion">
					<h4>Algoritmos de árboles</h4>
					<p>Descripción de este curso en esta sección</p>
				</article>
				<article class="seccion">
					<h4>Métodos de ordenamiento</h4>
					<p>Descripcion de este curso en esta seccion</p>
				</article>
				<article class="seccion">
					<h4>Algoritmos de búsqueda</h4>
					<p>Descripcion de este curso en esta seccion</p>
				</article>
			</section>
			
			<div class="inline">
				<section id="extras" class="form-group">
					<div>			
						<p class="enlace text-info">Actualiza tu perfil y cuéntanos que buscas para tener más oportunidades!. </p>
						<img class="imgContent img-circle" src="img/user.png" alt="usuario" >	
					</div>
					<div>
						<p class="enlace">Elabora tu Currículum. Es básico tener uno. </p>	
						<img class="imgContent" src="img/check.png" alt="Verificar" >				
					</div>
					<div>	
						<p class="enlace">
							Consulta el repertorio de cursos que ofrecemos y toma el que más te pueda ayudar!
						</p> 
						<img class="imgContent" src="img/find.png" alt="Buscar" >
					</div>	
				</section>
			
				<section id="tip" class="form-group">
					<div id="divTip">
						<h3>Tip del dia</h3><br>
						<span>When you do things right, people won't be sure you've done anything at all.</span><br>
						<span>-Futurama</span>
					</div>			
				</section>
			</div>
			
		</div>
	</body>
</html>