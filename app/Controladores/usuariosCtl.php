<?php  
	/**
	* 
	*/
	class Usuario
	{

		private $modelo;
		private $header;
		private $footer;

		function __construct(){
			$this->header = file_get_contents("app/Vistas/header.html");
			$this->footer = file_get_contents("app/Vistas/footer.html");			
		}

		function muestra(){
			echo "usuario.php";
		}

		/**
		* Método que realiza una acción según el valor enviado en GET con la llave act
		*
		*/
		public function ejecutar(){


			if(isset($_GET['act'])){
				if(isset($_GET['iduser'])){
					$idUsuario = $_GET['iduser'];
				}else{
					$idUsuario = -1;
				}
				

				switch ($_GET['act']) {
					case 'mostrar':
							$this->mostrarPerfil($idUsuario);					
						break;				
					case 'configurar':
							$this->configuraPerfil($idUsuario);
						break;
					case 'sesion':							
							$this->muestraFormulario(1);
						break;							
					case 'registro':
							$this->muestraFormulario(2);
						break;
					case 'recuperar':
							$this->muestraFormulario(3);
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
		private function mostrarPerfil($id){
			/*Conecta al modelo correspondiente para consultar con el ID al usuario*/
			//require('app/Vistas/perfilPublico.html');

			if($id >= 0){
				$vista = file_get_contents("app/Vistas/perfilPublico.html");
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
					'app/Vistas/curso1.php',
					'app/Vistas/curso2.php');

				$inicioFila = strrpos($vista,'<!--{iniciaCurso}-->');
				$finalFila = strrpos($vista,'<!--{terminaCurso}-->')+21;

				$fila = substr($vista,$inicioFila,$finalFila-$inicioFila);
				$filas = "";

				$i = 0;

				foreach ($listaTitulos as $row) {
					$newFila = $fila;

					$diccionarioFila = array(
						'{urlCurso}'=>$listaUrl[$i],
						'{colorRandom}'=>'naranja',
						'{Titulo}'=>$row);

					$newFila = strtr($newFila, $diccionarioFila);
					$filas .= $newFila;
					$i++;
				}

				$vista = str_replace($fila,$filas, $vista);
				$vista = $this->header . $vista . $this->footer;

				echo $vista;
			}else{
				require('404.html');
			}
		}

		private function configuraPerfil($id){
			$vista = file_get_contents('app/Vistas/configurarPerfil.html');

			if($id >= 0){
				echo $this->header . $vista . $this->footer;
			}else{
				require('404.html');
			}
		}

		/**
		* Muestra un formulario indicado por el parámetro tipo
		* @param $tipo El valor 1 abre el formulario de sesion, el valor 2 el formulario de registro, 3 recuperar contraseña
		*/
		private function muestraFormulario($tipo){
			switch ($tipo) {
				case 1:
					$vista = file_get_contents('app/Vistas/sesion.html');					
					break;
				case 2:
					$vista = file_get_contents('app/Vistas/registro.html');
					break;
				case 3:
					$vista = file_get_contents('app/Vistas/recuperar.html');
					break;
				default:
					# code...
					break;
			}

			echo $this->header . $vista . $this->footer;
		}

	}
?>
