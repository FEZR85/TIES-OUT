<?php  
	/**
	* 
	*/
	class Curso
	{

		private $modelo;
		private $header;
		private $footer;

		function __construct(){
			session_start();
			$this->header = file_get_contents("app/Vistas/header.html");
			$this->footer = file_get_contents("app/Vistas/footer.html");			
		}

		public function ejecutar(){
				//require_once("modelo/usuario.php");
				//$this->modelo = new UsuarioMdl();
				if(isset($_GET['act'])){
					if(isset($_GET['idcurso'])){
						$idcurso = $_GET['idcurso'];
					}else{
						$idcurso = -1;
					}

					
					switch ($_GET['act']) {
						case 'mostrar':
								$this->muestraCurso($idcurso);
							break;
						case 'miscursos':
								$this->misCursos();
							break;
						default:
							# code...
							break;
					}
				}
		}

		private function muestraCurso($idcurso){
			
			if($idcurso>=0){
				switch ($idcurso) {
					case 1:
						$vista = file_get_contents('app/Vistas/curso1.html');
						break;
					case 2:
						$vista = file_get_contents('app/Vistas/curso2.html');
						break;
					default:
						# code...
						break;
				}
			}else{

			}

			echo $this->header . $vista . $this->footer;
		}

		private function misCursos(){
			$vista = file_get_contents('app/Vistas/misCursos.html');

			echo $this->header . $vista . $this->footer;
		}
	}
?>
