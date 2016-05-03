<?php  
	$bandera = false;
	if(isset($_GET['vista'])){	
		switch ($_GET['vista']) {
			case 'alumnos':
				require('app/Controller/alumnosCtl.php');			
				$controlador = new Alumno();
				$bandera = true;
				break;
			case 'buscarTrabajo':
				require('app/Controller/buscarTrabajoCtl.php');			
				$controlador = new buscarTrabajo();
				$bandera = true;
				break;
			case 'busqueda':
				require('app/Controller/busquedaCtl.php');			
				$controlador = new Busqueda();
				$bandera = true;
				break;
			case 'configurarPerfil':
				require('app/Controller/configurarPerfilCtl.php');			
				$controlador = new configuraPerfil();
				$bandera = true;
				break;
			case 'contacto':
				require('app/Controller/contactoCtl.php');			
				$controlador = new Contacto();
				$bandera = true;
				break;
			case 'examen':
				require('app/Controller/examenCtl.php');			
				$controlador = new Examen();
				$bandera = true;
				break;
			case 'indexPanel':
				require('app/Controller/indexPanelCtl.php');			
				$controlador = new PanelSesion();
				$bandera = true;
				break;
			case 'listaCalificaciones':
				require('app/Controller/listaCalificacionesCtl.php');			
				$controlador = new Lista();
				$bandera = true;
				break;
			case 'listasCursosPanel':
				require('app/Controller/listasCursosPanelCtl.php');			
				$controlador = new LCursos();
				$bandera = true;
				break;
			case 'listasUsuariosPanel':
				require('app/Controller/listasUsuariosPanelCtl.php');			
				$controlador = new LUsuarios();
				$bandera = true;
				break;
			case 'panel':
				require('app/Controller/panelCtl.php');			
				$controlador = new Panel();
				$bandera = true;
				break;
			case 'perfilPublico':
				require('app/Controller/perfilPublicoCtl.php');			
				$controlador = new Perfil();
				$bandera = true;
				break;
			case 'recordarPanel':
				require('app/Controller/recordarPanelCtl.php');			
				$controlador = new Recordar();
				$bandera = true;
				break;
			case 'resultadoExamen':
				require('app/Controller/resultadoExamenCtl.php');			
				$controlador = new Resultado();
				$bandera = true;
				break;



			case 'curso1':
				require('app/Controller/curso1Ctl.php');			
				$controlador = new curso1();
				$bandera = true;
				break;
			case 'curso2':
				require('app/Controller/curso2Ctl.php');			
				$controlador = new curso2();
				$bandera = true;
				break;
			case 'menuCurso2':
				require('app/Controller/menuCurso2Ctl.php');			
				$controlador = new menuCurso2();
				$bandera = true;
				break;
			case 'misCursos':
				require('app/Controller/misCursosCtl.php');			
				$controlador = new ALumno();
				$bandera = true;
				break;
			case 'recuperar':
				require('app/Controller/recuperarCtl.php');			
				$controlador = new recuperar();
				$bandera = true;
				break;
			case 'registro':
				require('app/Controller/registroCtl.php');			
				$controlador = new registro();
				$bandera = true;
				break;
			case 'sesion':
				require('app/Controller/sesionCtl.php');			
				$controlador = new sesion();
				$bandera = true;
				break;
			default:
				# code...
				require('app/Vistas/home.php');
				break;
		}

		if($bandera){
			$controlador->muestra();
		}
	}else{
		require('app/Vistas/home.php');
	}
?>

