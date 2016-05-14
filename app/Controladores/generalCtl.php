<?php
	/**
	*
	*/
	class General
	{

		private $modelo;

		function muestra(){
			echo "General.php";
		}

		public function ejecutar(){
			//require_once("modelo/usuario.php");
			//$this->modelo = new UsuarioMdl();
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
					default:
						# code...
						break;
				}
			}else{
				require('app/Vistas/404.php');
			}
		}//fin funcion ejecutar

		function btrabajo(){
			$vista = file_get_contents("app/Vistas/buscarTrabajo.html");
			$header = file_get_contents("app/Vistas/header.html");
			$footer = file_get_contents("app/Vistas/footer.html");
			$diccionario = array(
				'{title}' => "Buscar trabajo");
			$vista = strtr($vista,$diccionario);
			$vista = $header . $vista . $footer;
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

	}
?>
