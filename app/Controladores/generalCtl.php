<?php
	/**
	*
	*/
	class General
	{

		private $modelo;
		private $head;
		private $header;
		private $footer;

		private $generalctl;
		private $vista;

		function __construct(){
			//session_start();
			//require('app/Modelo/singleton.php');
			$this->instancia = Conexion::getInstance();
			$this->instancia->__construct();

			$this->mysql = $this->instancia->getConnection();
			$this->head = file_get_contents('app/Vistas/head.html');
			$this->header = file_get_contents('app/Vistas/header.html');
 			$this->footer = file_get_contents('app/Vistas/footer.html');

			$this->header = $this->headerSesion($this->header);

		}

		public function ejecutar(){
			if(isset($_GET['act'])){
				switch ($_GET['act']) {
					case 'btrabajo':
							$this->btrabajo();
						break;
					case 'contacto':
							$this->contacto();
						break;
					case 'nosotros':
							$this->nosotros();
						break;
					case 'busqueda':
							$this->busqueda();
						break;
					default:
						# code...
						break;
				}

			}else{
				//require('app/Vistas/404.php');
			}
		}

		function btrabajo(){
			$this->vista = file_get_contents("app/Vistas/buscarTrabajo.html");

			$diccionario = array(
				'{tituloPagina}' => "Buscar empleo",
				'<!--{masLinks}-->' => '<link rel="stylesheet" type="text/css" href="recursos/css/buscaTrabajo.css">');

			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;

			echo $this->vista;
		}

		function contacto(){
			$this->vista = file_get_contents("app/Vistas/contacto.html");

			$diccionario = array(
				'{tituloPagina}' => "Contacto");

			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;

			echo $this->vista;
		}

		function nosotros(){
			$this->vista = file_get_contents("app/Vistas/informacion.html");

			$diccionario = array(
				'{tituloPagina}' => "Quiénes somos");

			$this->head = strtr($this->head,$diccionario);
			$this->vista = $this->head . $this->header . $this->vista . $this->footer;

			echo $this->vista;
		}

		function busqueda(){
			require('app/Modelo/generalMdl.php');
			$this->modelo = new GeneralMdl($this->mysql);
			if(empty($_POST)){
				$vista = file_get_contents("app/Vistas/busqueda.html");
				$diccionarioBuqueda = array(
					'<!--{encabezadoBusqueda}-->'=>'<a href="#"><h2>No se encontraron resultados.</h2></a>',
					'<!--{contenidoBusqueda}-->'=>'Intente con otra busqueda...');
				$vista = strtr($vista,$diccionarioBusqueda);
				$diccionario = array(
					'{tituloPagina}' => "Búsqueda");
				$this->head = strtr($this->head,$diccionario);
				$vista = $this->head . $this->header . $vista . $this->footer;
				echo $vista;
			}
			else{
				$buqueda = $_POST["busqueda"];
				$resultado = $this->modelo->buscar($busqueda);
				if($resultado !== FALSE){
					$vista = file_get_contents("app/Vistas/busqueda.html");
					$inicio_fila = strrpos($vista,'<!--{icurso}-->');
					$final_fila = strrpos($vista,'<!--{fcurso}-->') + 15;
					$filaCursos = substr($vista,$inicio_fila,$final_fila-$inicio_fila);
					$inicio_filaU = strrpos($vista,'<!--{iusuario}-->');
					$final_filaU = strrpos($vista,'<!--{fusuario}-->') + 17;
					$filaUsuario = substr($vista,$inicio_filaU,$final_filaU-$inicio_filaU);
					foreach ($alumnos as $row) {
						$new_filaCurso = $filaCursos;
						$new_filaUsuario = $filaUsuario;
						$diccionarioUsuario = array(
							'<!--{encabezadoBusqueda}-->' => $row['usuario'],
							'<!--{contenidoBusqueda}-->' => $row['descripcion']);
						$diccionarioCurso = array(
							'<!--{encabezadoBusqueda}-->' => $row['curso'],
							'<!--{contenidoBusqueda}-->' => $row['contenido']);
						$new_filaCurso = strtr($new_filaCurso,$diccionarioCurso);
						$new_filaUsuario = strtr($new_filaUsuario,$diccionarioUsuario);
						$filasCursos .= $new_filaCurso;
						$filasUsuarios .= $new_filaUsuario;
					}
					$vista = str_replace($filaCursos, $filasCursos, $vista);
					$vista = str_replace($filaUsuario, $filasUsuarios, $vista);
					$diccionario = array(
						'{tituloPagina}' => "Búsqueda");
					$this->head = strtr($this->head,$diccionario);
					$this->vista = $this->head . $this->header . $vista . $this->footer;
					echo $this->vista;
				}
			}
		}

		public static function headerSesion($header){


			if(isset($_SESSION) && !empty($_SESSION)){

				$inicioDesconectado = strrpos($header, '<!--{iniciodesconectado}-->');
				$finDesconectado = strrpos($header, '<!--{findesconectado}-->') + 24;

				$desconectado = substr($header, $inicioDesconectado,$finDesconectado - $inicioDesconectado);
				$header = str_replace($desconectado, '<!--{Desconectado}-->', $header);

				$header = str_replace('<!--{nombreUsuario}-->', $_SESSION['nombre'], $header);

			}else{
				$inicioConectado = strrpos($header, '<!--{inicioconectado}-->');
				$finConectado = strrpos($header, '<!--{finconectado}-->') + 21;

				$conectado = substr($header, $inicioConectado, $finConectado - $inicioConectado);
				$header = str_replace($conectado,'<!--{Conectado}-->', $header);
			}

			return $header;
		}
	}
?>
