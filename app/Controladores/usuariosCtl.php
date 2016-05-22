<?php
	/**
	*
	*/
	class Usuario
	{
		

		private $modelo;
		private $header;
		private $footer;
		private $instancia;
		private $mysql;

		function __construct(){
			session_start();
			require('app/Modelo/singleton.php');
			
			$this->instancia = Conexion::getInstance();
			$this->instancia->__construct();

			$this->mysql = $this->instancia->getConnection();

			$this->header = file_get_contents("app/Vistas/header.html");
			$this->footer = file_get_contents("app/Vistas/footer.html");
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
					case 'registrar':
							//Aqui llegar para conectarse a la base de datos por medio del modelo
							$this->altaUsuario();
						break;
					case 'inicioSesion':
							$this->iniciaSesionUsuario();
						break;
					default:
							require('404.php');
						break;
				}
			}else{
				require('404.html');
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

		private function altaUsuario(){
			require('app/Modelo/usuarioMdl.php');
			$this->modelo = new UsuarioMdl($this->mysql);//se le manda la variable con la conexion establecida

			if(empty($_POST)){
				//No hay datos para guardar en la BD
					//validaciones de que los campos contengan lo que deben contener
					//validacion de segundo campo de contraseña
			}else{
				$nombre 	= $_POST["nombre"];
				$correo	= $_POST["correo"];
				$contrasena 	= $_POST["contrasena"];
					//validaciones de que los campos contengan lo que deben contener
					//validacion de segundo campo de contraseña
				$resultado = $this -> modelo -> alta($nombre, $correo, $contrasena);
				//echo "<br>debug: Va a cargar la vista en base a lo devuelto por el modelo";
				if($resultado!==FALSE){
					//Procesar la vista
					//Obtener la vista
					$vista = file_get_contents("app/Vistas/home.html");
					$header = file_get_contents("app/Vistas/header.html");
					$footer = file_get_contents("app/Vistas/footer.html");

					echo $header . $vista . $footer;

					//mostrar el menu con la informacion del usuario: nombre, opcion de mis cursos, modificar perfil, cerrar sesion.
				}
				else{
					//require_once("app/Vistas/Error.html");
					echo "No se pudo registrar";
				}
			}
		}

		private function iniciaSesionUsuario(){
			require('app/Modelo/usuarioMdl.php');
			$this->modelo = new UsuarioMdl($this->msql);

			if(empty($_POST)){

			}else{
				$correo = $_POST['correo'];
				$contrasena = $_POST['contasena'];

				//Validar correo y contraseña

				//Revisa si el usuario existe en la base de datos
				$resultado = $this->modelo->consultaUsuario($correo, $contrasena);

				if($resultado!==FALSE){
					$vista = file_get_contents("app/Vistas/home.html");
					$header = file_get_contents("app/Vistas/header.html");
					$footer = file_get_contents("app/Vistas/footer.html");

					echo $header . $vista . $footer;
				}else{
					echo "Error al iniciar sesión";
				}
			}
		}
	}
?>
