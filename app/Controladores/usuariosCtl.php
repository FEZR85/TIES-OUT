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
			//require('app/Vistas/perfilPublico.php');
			$vista = file_get_contents("app/Vistas/perfilPublico.php");
			$header = file_get_contents("app/Vistas/header.php");
			//$footer

			$diccionarioUsuario = array(
				'{correoUsuario}'=>'dancaballeroc@gmail.com',
				'{nombreUsuario}'=>'Alfonso Caballero');

			$vista = strtr($vista,$diccionarioUsuario);


			$listaTitulos = array(
				'Arbol',
				'Algoritmos',
				'otro');

			$listaUrl = array(
				'app/Vistas/curso1.php');

			$inicioFila = strrpos($vista,'<!--{inicioCurso}-->');
			$finalFila = strrpos($vista,'<!--{terminaCurso}-->')+21;

			$fila = substr($vista,$inicioFila,$finalFila-$inicioFila);
			$filas = "";

			foreach ($listaTitulos as $row) {
				$newFila = $fila;

				$diccionarioFila = array(
					'{urlCurso}'=>$listaUrl[0],
					'{colorRandom}'=>'naranja',
					'{Titulo}'=>$row[0]);

				$newFila = strtr($newFila, $diccionarioFila);
				$filas .= $newFila;
			}
			$vista = str_replace($fila,$filas, $vista);
			$vista = $header . $vista;

			echo $vista;

		}

		public function configuraPerfil($id){
			require('app/Vistas/configurarPerfil.php');
		}
	}
?>
