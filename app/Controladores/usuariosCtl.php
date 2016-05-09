<?php  
	/**
	* 
	*/
	class Usuario
	{

		private $modelo;

		function muestra(){
			echo "usuario.php";
		}

		public function ejecutar(){
			//require_once("modelo/usuario.php");
			//$this->modelo = new UsuarioMdl();
			switch ($_GET['act']) {
				case 'mostrar':
						$this->mostrarPerfil(1);					
					break;				
				default:
					# code...
					break;
			}
		}

		/**
		* mostrarPerfil
		* 
		*/
		public function mostrarPerfil($id){
			/*Conecta al modelo correspondiente para consultar con el ID al usuario*/
			require('app/Vistas/formularios/perfilPublico.php');
		}
	}
?>
