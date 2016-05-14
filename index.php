<?php
	$bandera = false;
	if(isset($_GET['controlador'])){
		switch ($_GET['controlador']) {
			case 'administrador':
					require('app/Controladores/administradorCtl.php');
					$controlador = new Administrador();
					$bandera = true;
				break;
			case 'busqueda':
					require('app/Controladores/busquedaCtl.php');
					$controlador = new Busqueda();
					$bandera = true;
				break;
			case 'cursos':
					require('app/Controladores/cursosCtl.php');
					$controlador = new Curso();
					$bandera = true;
				break;
			case 'general':
					require('app/Controladores/generalCtl.php');
					$controlador = new General();
					$bandera = true;
				break;
			case 'usuarios':
					require('app/Controladores/usuariosCtl.php');
					$controlador = new Usuario();
					$bandera = true;
				break;
			default:
				# code...
					require_once('app/Vistas/header.html');
					require_once('app/Vistas/home.html');
					require_once('app/Vistas/footer.html');
				break;
		}

		if($bandera){
			$controlador->ejecutar();
		}
	}else{
		require_once('app/Vistas/header.html');
		require_once('app/Vistas/home.html');
		require_once('app/Vistas/footer.html');
	}
?>
