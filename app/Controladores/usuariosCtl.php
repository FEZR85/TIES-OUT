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

		/**
		* Método que realiza una acción según el valor enviado en GET con la llave act
		*
		*/
		public function ejecutar(){

			if(isset($_GET['act']) && isset($_GET['iduser'])){

				$idUsuario = $_GET['iduser'];

				switch ($_GET['act']) {
					case 'mostrar':
							$this->mostrarPerfil($idUsuario);					
						break;				
					case 'configura':
							$this->configuraPerfil($idUsuario);
						break;
					default:
							require('app/Vistas/404.php');
						break;
				}
			}else{
				require('app/Vistas/404.php');
			}
		}

		/**
		* Método que muestra el perfil público del usuario indicado.
		* @param int $id ID correspondiente al usuario consultado
		* 
		*/
		public function mostrarPerfil($id){
			/*Conecta al modelo correspondiente para consultar con el ID al usuario*/
			require('app/Vistas/perfilPublico.php');
		}

		public function configuraPerfil($id){
			require('app/Vistas/configurarPerfil.php');
		}
	}
?>
