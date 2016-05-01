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
			switch ($_GET['act']) {
				case 'alta':
						echo "altaAlumnos.php";
					
					break;
				case 'ver':
						echo "perfilPublico.php";
					break;
				case 'configurar':
						echo "configurarPerfil.php";
					break;
				case 'recordar':
						echo "recordar.php";
					break;
				case 'misCursos':
						echo "misCursos.php";
					break;
				break;
				default:
					# code...
					break;
			}
		}
	}
?>
