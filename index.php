<?php
	$bandera = false;
	if(isset($_GET['controlador'])){
		switch ($_GET['controlador']) {
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
				session_start();
				if($_SESSION["iidUsuario"] == "" || isset($_SESSION["iidUsuario"])){
					$head = file_get_contents('app/Vistas/head.html');
					$header = file_get_contents('app/Vistas/header.html');
					$vista = file_get_contents('app/Vistas/home.html');
					$footer = file_get_contents('app/Vistas/footer.html');
					$diccionario = array('{tituloPagina}'=>"Inicio");
					$head = strtr($head, $diccionario);
					$vista = $head . $header . $vista . $footer;
					echo $vista;
				}
				else{
					$head = file_get_contents('app/Vistas/head.html');
					$header = file_get_contents('app/Vistas/header2.html');
					$vista = file_get_contents('app/Vistas/home.html');
					$footer = file_get_contents('app/Vistas/footer.html');
					$diccionario = array('{tituloPagina}'=>"Inicio");
					$head = strtr($head, $diccionario);
					$vista = $head . $header . $vista . $footer;
					echo $vista;
				}
				break;
		}

		if($bandera){
			$controlador->ejecutar();
		}
	}else{
		session_start();
		if($_SESSION["iidUsuario"] == "" || isset($_SESSION["iidUsuario"])){
			$head = file_get_contents('app/Vistas/head.html');
			$header = file_get_contents('app/Vistas/header.html');
			$vista = file_get_contents('app/Vistas/home.html');
			$footer = file_get_contents('app/Vistas/footer.html');
			$diccionario = array('{tituloPagina}'=>"Inicio");
			$head = strtr($head, $diccionario);
			$vista = $head . $header . $vista . $footer;
			echo $vista;
		}
		else{
			$head = file_get_contents('app/Vistas/head.html');
			$header = file_get_contents('app/Vistas/header2.html');
			$vista = file_get_contents('app/Vistas/home.html');
			$footer = file_get_contents('app/Vistas/footer.html');
			$diccionario = array('{tituloPagina}'=>"Inicio");
			$head = strtr($head, $diccionario);
			$vista = $head . $header . $vista . $footer;
			echo $vista;
		}
	}
?>
