<?php
class ExamenMdl{

	private $mysql;

	function __construct($mysql){
		$this->mysql = $mysql;
	}

    function traerExamenes(){
		$info ="";
		$query = "SELECT  E.iidExamen as id , upper( E.vchNombre ) AS nombre, E.iValor as valor, C.vchNombre as curso,
                CASE WHEN E.tiActivo =1 THEN 'Usuario activado' ELSE 'Usuario desactivado' END as estado
                FROM examen E
                INNER JOIN curso C 
                ON C.iidCurso = E.iidCurso
                WHERE E.tiEliminado = 0";
		$resultado = $this->mysql->query($query);
		while($fila = $resultado->num_rows){
			if($fila > 0)
				while($fila = $resultado->fetch_assoc())
					$info[] = $fila;
		return $info;
		}
		return false;
	}
}

?>
