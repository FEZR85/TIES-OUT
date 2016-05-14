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
							require('app/Vistas/contacto.php');
						break;
					case 'nosotros':
							require('app/Vistas/informacion.php');
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

	}
?>
