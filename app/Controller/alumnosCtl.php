<?php  
	/**
	* 
	*/
	class Alumno
	{

		private $modelo;

		function muestra(){
			echo "alumnos.php";
		}

		public function ejecutar(){
			//require_once("modelo/alumnoCtl.php");
			//$this->modelo = new AlumnoMdl();
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