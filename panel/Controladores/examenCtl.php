<?php
	/**
	*
	*/
	class Examen
	{


		private $modelo;
		private $head;
		private $header;
		private $footer;
		private $instancia;
		private $mysql;
		private $generalctl;

		function __construct(){
			//session_start();
			require('Controladores/generalCtl.php');
			$this->instancia = Conexion::getInstance();
			$this->instancia->__construct();

			$this->mysql = $this->instancia->getConnection();

			$this->generalctl = new General();
			$this->header = file_get_contents("Vistas/header.html");
			$this->header = $this->generalctl->headerSesion($this->header);
			$this->head = file_get_contents('Vistas/head.html');
			$this->footer = file_get_contents('Vistas/footer.html');
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
							$this->mostrarExamen();
						break;
					case 'agregar':
							//Aqui llegar para conectarse a la base de datos por medio del modelo
							$this->agregarExamen();
						break;
					case 'inicioSesion':
							$this->iniciaSesionUsuario();
						break;
					case 'cerrarSesion':
							$this->cerrarSesion();
						break;
					case 'eliminar':
							$this->eliminar();
						break;
					case 'desactivar':
							$this->desactivar();
						break;
					case 'activar':
							$this->activar();
						break;
					default:
							//require('404.php');
						break;
				}
			}else{
				//require('404.html');
			}
		}

        /**
		* Muestra un formulario indicado por el parámetro tipo
		* @param
		*/
		private function mostrarExamen(){
			require('Modelo/examenMdl.php');
			$this->modelo = new ExamenMdl($this->mysql);

			$diccionario = "";
			$diccionarioUsuarios = "";
			$filas = "";
			$vista = file_get_contents('Vistas/listas/examenes.html');
			$inicio_fila = strrpos($vista,'<!--{examenes}-->');
			$final_fila = strrpos($vista,'<!--{examenesT}-->') + 18;
			$fila = substr($vista,$inicio_fila,$final_fila-$inicio_fila);
			$examen = $this->modelo->traerExamenes();
            if($examen !== FALSE){
                foreach ($examen as $row) {
        			$new_fila = $fila;
        			$diccionario = array(
        				'<!--{id}-->' => $row['id'],
        				'<!--{estado}-->' => $row['estado'],
        				'<!--{nombre}-->' => $row['nombre'],
        				'<!--{valor}-->' => $row['valor'],
        				'<!--{curso}-->' => $row['curso']);
        				$new_fila = strtr($new_fila,$diccionario);
        				$filas .= $new_fila;
    			}
    			//Reemplazo en mi vista una fila por todas las filas
    			$vista = str_replace($fila, $filas, $vista);
            }
			$diccionario = array(
				'{tituloPagina}'=> "Examenes",
				'<!--{masLinks}-->'=> '<link rel="stylesheet" type="text/css" href="../recursos/css/panel/simple-sidebar.css"/>  <link rel="stylesheet" type="text/css" href="../recursos/js/paginacion/simplePagination.css"/>  <script type="text/javascript" src="../recursos/js/paginacion.js"></script>',
				'<!--{otros}-->' => '<script type="text/javascript" src="../recursos/js/paginacion/jquery.simplePagination.js"></script>');

			$this->head = strtr($this->head,$diccionario);
			$vista = $this->head . $this->header . $vista . $this->footer;

			echo $vista;
		}

        private function agregarExamen(){

			$vista = file_get_contents("Vistas/agregarexamen.html");
			$diccionario = array(
			'{tituloPagina}'=>"Agregar examen",
			'<!--{otros}-->' => '<link rel="stylesheet" type="text/css" href="../recursos/css/panel/simple-sidebar.css">');
			$this->head = strtr($this->head,$diccionario);
			echo $this->head . $this->header . $vista . $this->footer;
		}

    }

?>
