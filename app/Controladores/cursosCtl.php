<?php  
	/**
	* 
	*/
	class Curso
	{

		private $modelo;

		function muestra(){
			echo "Curso.php";
		}

			public function ejecutar(){
				//require_once("modelo/usuario.php");
				//$this->modelo = new UsuarioMdl();
				if(isset($_GET['act']) && isset($_GET['idcurso'])){
					$idcurso = $_GET['idcurso'];
					switch ($_GET['act']) {
						case 'muestra':
								$this->muestraCurso($idcurso);
							break;
						
						default:
							# code...
							break;
					}
				}
			}

		private function muestraCurso($idcurso){

			switch ($idcurso) {
				case 1:
					require('app/Vistas/curso1.php');
					break;
				case 2:
					require('app/Vistas/curso2.php');
					break;
				default:
					# code...
					break;
			}
			
		}
	}
?>
