<?php
class UsuarioMdl{

	private $mysql;

	function __construct($mysql){
		$this->mysql = $mysql;
	}

	function alta ($nombre, $correo, $contrasena){
		/*$query = "INSERT INTO usuario(vchNombre, vchPaterno, vchMaterno, vchCorreo, vchContraseña,tiEliminado, tiActivo, iidTipo)
				VALUES('$nombre','uno','dos','$correo','$contrasena',0,1,1)";*/
		//La siguiente query es segun la otra base de datos
		$query = "INSERT INTO usuario(vchnombre, vchpaterno, vchmaterno, vchcorreo, vchpassword, iTipo)
				VALUES('$nombre','uno','dos','$correo','$contrasena',1)";
		$result = $this->mysql->query($query);
		if($this -> mysql-> insert_id){
			return $this -> mysql -> insert_id;
		}
		elseif($result === FALSE)
			return FALSE;
	}

	function consultaUsuario($correo, $contrasena){
		$query = $this "SELECT vchnombre FROM usuario WHERE vchcorreo=$correo AND vchpassword=$contrasena";

		//$result = $this->mysql-
	}
}
