<?php 
    $base_dir  = __DIR__; // Absolute path to your installation, ex: /var/www/mywebsite
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
    define('ROOTPATH', $base_url); 
?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="btn navbar-toggle collapsed" id="inicia" href="<?php echo ROOTPATH ?>/login/login.php" >
		    	<span class="glyphicon glyphicon-log-in"></span>
			</a>
			<a class="btn navbar-toggle collapsed" id="salirS" href="<?php echo ROOTPATH ?>/index.php" >
	      		<span class="glyphicon glyphicon-log-out"></span>
	      	</a>
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
		            data-target=".navbar-ex1-collapse">
		      <span class="sr-only">Desplegar navegación</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="<?php echo ROOTPATH ?>/index.php">
		    	<img alt="Brand" src="<?php echo ROOTPATH ?>/img/logoTieOut.png">
		    </a>
		    <a id="tiesOut" class="navbar-brand" href="<?php echo ROOTPATH ?>/index.php">TIES-OUT</a>
	  	</div>
	 
	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	       otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul class="nav navbar-nav">
	      <li><a class="head" href="<?php echo ROOTPATH ?>/formularios/buscarTrabajo.php">BUSCAR EMPLEO</a></li>
	      <li class="dropdown">
	        <a class="head" href="#" class="dropdown-toggle" data-toggle="dropdown">
	          CURSOS <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo ROOTPATH ?>/formularios/curso1.php">Árboles</a></li>
	          <li><a href="<?php echo ROOTPATH ?>/formularios/curso2.php">Métodos de ordenamiento</a></li>
	          <li><a href="#">Algoritmos de búsqueda</a></li>
	          <li class="divider"></li>
	          <li><a href="#"></a></li>
	        </ul>
	      </li>
	      <li><a class="head" href="<?php echo ROOTPATH ?>/formularios/contacto.php">CONTACTO</a></li>
	      <li id="miscursos"><a class="head" href="#">MIS CURSOS</a></li>
	    </ul>
	   
	 	 <ul class="nav navbar-nav navbar-right login">
	      	<li id="registro"><a href="<?php echo ROOTPATH ?>/login/registro.php">Registrate</a></li>
	      	<li id="entrar">
	      		<a class="btn" id="sesion" href="<?php echo ROOTPATH ?>/login/login.php" >Iniciar sesión</a>
	      		<a class="btn" id="inicia" href="<?php echo ROOTPATH ?>/login/login.php" >
	      			<span class="glyphicon glyphicon-log-in"></span>
	      		</a>
	      	</li>
	      
	      	<li id="infoUser">
	           <a class="dropdown-toggle" data-toggle="dropdown" role="button">
                <div class="img-circle profile-img"></div>
                User Name
              </a>
         	</li>
	      	<li id="confPerfil">
            	<a href="<?php echo ROOTPATH ?>/formularios/configurarPerfil.php">
	               	<span class="glyphicon glyphicon-cog"></span>
	      		</a>
	      	</li>
	      	<li id="salir">
	      		<a id="tsesion" href="<?php echo ROOTPATH ?>/index.php" >Salir</a>
	      		<a id="salirS" href="<?php echo ROOTPATH ?>/index.php" >
	      			<span class="glyphicon glyphicon-log-out"></span>
	      		</a>
	      	</li>
	    </ul>
	    
	    <form class="navbar-form navbar-right" role="search">
	      	<div class="input-group">
	        	<input type="text" class="form-control" placeholder="e.j. Árboles binarios">
				<span class="glyphicon glyphicon-search input-group-addon"></span>
	      	</div>
	      <!--button type="submit" class="btn btn-default glyphicon glyphicon-search input-group-addon"></button-->
	    </form>
	 
	    
	  </div>
	  </div>
	</nav>

     	
     	