<?php
	/**
	*
	*/
	class Curso
	{

		private $modelo;
		private $header;
		private $footer;
		private $head;

		function __construct(){
			require('Controladores/generalCtl.php');

// 			session_start();
			$this->header = file_get_contents("Vistas/header.html");
			$this->footer = file_get_contents("Vistas/footer.html");
			$this->head = file_get_contents("Vistas/head.html");

			$this->generalctl = new General();
			$this->header = $this->generalctl->headerSesion($this->header);
		}

		public function ejecutar(){
				//require_once("modelo/usuario.php");
				//$this->modelo = new UsuarioMdl();
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'mostrar':
								$this->muestraCursos();
							break;
						default:
							# code...
							break;
					}
				}
		}

		private function muestraCursos(){

			$vista = file_get_contents("Vistas/listas/cursos.html");
			$diccionario = array(
			'{tituloPagina}'=>"Cursos",
			'<!--{otros}-->' => '<link rel="stylesheet" type="text/css" href="../recursos/css/panel/simple-sidebar.css">');
			$this->head = strtr($this->head,$diccionario);
			echo $this->head . $this->header . $vista . $this->footer;
		}
	}
?>
