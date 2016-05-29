<?php
	/**
	*
	*/
	class Busqueda
	{

		private $modelo;

		function __construct(){
			session_start();
			if($_SESSION["iidUsuario"] == "" || isset($_SESSION["iidUsuario"]))
				$this->header = file_get_contents("app/Vistas/header.html");
			else
				$this->header = file_get_contents("app/Vistas/header2.html");
			$this->footer = file_get_contents("app/Vistas/footer.html");
			$this->head = file_get_contents("app/Vistas/head.html");
		}

		public function ejecutar(){
			//require_once("modelo/usuario.php");
			//$this->modelo = new UsuarioMdl();
			switch ($_GET['act']) {
				case 'buscar':
						//$this->mostrarPerfil($idUsuario);
					break;
				default:
					# code...
					break;
			}
		}
	}
?>
