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
							require('app/Vistas/buscarTrabajo.php');						
						break;	
					case 'contacto':
							require('app/Vistas/contacto.php');
						break;
					default:
						# code...
						break;
				}
			}else{
				require('app/Vistas/404.php');
			}
		}
	}
?>
