<?php
class GeneralMdl{

	private $mysql;

	function __construct($mysql){
		$this->mysql = $mysql;
	}

	function buscar($stringBuscar){
        $info = "";
		/*$query = 'SELECT U.vchNombre AS usuario, U.vchDescripcion AS descripcion, C.vchNombre AS curso,
                SUBSTRING( C.vchContenido, 100 ) AS contenido
                FROM usuario U, curso C
                WHERE (U.vchNombre LIKE "'.$stringBuscar.'%" AND U.tiActivo = 1 AND ti.Eliminado = 0)
                OR C.vchNombre LIKE "'.$stringBuscar.'%"';*/
        $query = 'SELECT U.vchNombre AS usuario, U.vchDescripcion AS descripcion
                FROM usuario U
                WHERE (U.vchNombre LIKE "'.$stringBuscar.'%" AND U.tiActivo = 1 AND ti.Eliminado = 0)';
		$resultado = $this->mysql->query($query);
		$fila = $resultado->fetch_assoc();
		return $fila;
    }
}
