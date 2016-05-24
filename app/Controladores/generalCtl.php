<?php
	/**
	*
	*/
	class General
	{

		private $modelo;
		private $head;

		function __construct(){
			session_start();
			$this->head = file_get_contents('app/Vistas/head.html');
		}

		public function ejecutar(){
			if(isset($_GET['act'])){
				switch ($_GET['act']) {
					case 'btrabajo':
							$this->btrabajo();
						break;
					case 'contacto':
							$this->contacto();
						break;
					case 'nosotros':
							$this->nosotros();
						break;
					case 'busqueda':
							$this->busqueda();
						break;
					default:
						# code...
						break;
				}
			}else{
				require('app/Vistas/404.php');
			}
		}

		function btrabajo(){
			//<link rel="stylesheet" type="text/css" href="recursos/css/buscaTrabajo.css">
			//Agregar css especifico para esta vista
			

			$vista = file_get_contents("app/Vistas/buscarTrabajo.html");
			$header = file_get_contents("app/Vistas/header.html");
			$footer = file_get_contents("app/Vistas/footer.html");
			$diccionario = array(
				'{tituloPagina}' => "Buscar empleo",
				'<!--{masLinks}-->' => '<link rel="stylesheet" type="text/css" href="recursos/css/buscaTrabajo.css">');
			$this->head = strtr($this->head,$diccionario);
			$vista = $this->head . $header . $vista . $footer;
			echo $vista;
		}

		function contacto(){
			$vista = file_get_contents("app/Vistas/contacto.html");
			$header = file_get_contents("app/Vistas/header.html");
			$footer = file_get_contents("app/Vistas/footer.html");
			$diccionario = array(
				'{title}' => "Contacto");
			$vista = strtr($vista,$diccionario);
			$vista = $header . $vista . $footer;
			echo $vista;
		}

		function nosotros(){
			$vista = file_get_contents("app/Vistas/informacion.html");
			$header = file_get_contents("app/Vistas/header.html");
			$footer = file_get_contents("app/Vistas/footer.html");
			$diccionario = array(
				'{title}' => "Quiénes somos");
			$vista = strtr($vista,$diccionario);
			$vista = $header . $vista . $footer;
			echo $vista;
		}

		function busqueda(){
			$vista = file_get_contents("app/Vistas/busqueda.html");
			$header = file_get_contents("app/Vistas/header.html");
			$footer = file_get_contents("app/Vistas/footer.html");
			$diccionario = array(
				'{title}' => "Busqueda");
			$vista = strtr($vista,$diccionario);
			$vista = $header . $vista . $footer;
			echo $vista;
		}
	}
?>
