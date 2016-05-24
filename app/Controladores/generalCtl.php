<?php
	/**
	*
	*/
	class General
	{

		private $modelo;
		private $head;
		private $header;
		private $footer;

		private $vista;

		function __construct(){
			session_start();
			$this->head = file_get_contents('app/Vistas/head.html');
			$this->header = file_get_contents('app/Vistas/header.html');
			$this->footer = file_get_contents('app/Vistas/footer.html');

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
			$this->vista = file_get_contents("app/Vistas/buscarTrabajo.html");

			$diccionario = array(
				'{tituloPagina}' => "Buscar empleo",
				'<!--{masLinks}-->' => '<link rel="stylesheet" type="text/css" href="recursos/css/buscaTrabajo.css">');

			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;

			echo $this->vista;			
		}

		function contacto(){
			$this->vista = file_get_contents("app/Vistas/contacto.html");

			$diccionario = array(
				'{tituloPagina}' => "Contacto");

			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;
						
			echo $this->vista;
		}

		function nosotros(){
			$this->vista = file_get_contents("app/Vistas/informacion.html");

			$diccionario = array(
				'{tituloPagina}' => "Quiénes somos");

			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;
						
			echo $this->vista;
		}

		function busqueda(){
			$this->vista = file_get_contents("app/Vistas/busqueda.html");
			
			$diccionario = array(
				'{tituloPagina}' => "Busqueda");
			
			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;
						
			echo $this->vista;
		}
	}
?>
