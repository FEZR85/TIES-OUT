<?php 
    $base_dir  = __DIR__; // Absolute path to your installation, ex: /var/www/mywebsite
    $doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url  = preg_replace("!^${doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
    define('ROOTPATH', $base_url); 
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>$('.carousel').carousel({interval: 3000 }) </script>
	
     	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
	            data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="<?php echo ROOTPATH ?>/index.php"><img alt="Brand" src="<?php echo ROOTPATH ?>/img/logoTieOut.png"></a>
	    <a class="navbar-brand" href="<?php echo ROOTPATH ?>/index.php">TIES-OUT</a>
	  </div>
	 
	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	       otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul class="nav navbar-nav">
	      <li><a class="head" href="#">TIPS</a></li>
	      <li><a class="head" href="#">BUSCAR EMPLEO</a></li>
	      <li class="dropdown">
	        <a class="head" href="#" class="dropdown-toggle" data-toggle="dropdown">
	          CURSOS <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo ROOTPATH ?>/formularios/curso1.php">Árboles</a></li>
	          <li><a href="#">Métodos de ordenamiento</a></li>
	          <li><a href="#">Algoritmos de búsqueda</a></li>
	          <li class="divider"></li>
	          <li><a href="#"></a></li>
	        </ul>
	      </li>
	    </ul>
	    
	 	 <ul class="nav navbar-nav navbar-right login">
	      <li><a href="<?php echo ROOTPATH ?>/login/registro.php">Registrate</a></li>
	      <li><a id="sesion" href="<?php echo ROOTPATH ?>/login/login.php" >Iniciar sesión</a></li>
	    </ul>
	    
	    <form class="navbar-form navbar-right" role="search">
	      <div class="form-group">
	        <input type="text" class="form-control" placeholder="e.j. Árboles binarios">
	      </div>
	      <button type="submit" class="btn btn-default">Buscar</button>
	    </form>
	 
	    
	  </div>
	  </div>
	</nav>

     	
     	