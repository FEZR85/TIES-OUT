function validaCorreo(correo){
	correo = "alguien@ejemplo.com";
	var patron = /^([a-z0-9A-Z]+[\.-]?)+@(([a-z0-9A-Z]+[-]?[a-z0-9A-Z]+)+[\.]?){1,4}(\.[a-zA-Z]{1,5})$/.test(correo);
	if(correo == null){
		return false; //se requiere el campo para enviar los datos
	}
	if(patron.test(correo))
	{
		return true;
	}
	return false;
}

function validaContraseña(contraseña){
	if(contraseña == null){
		return false; //se requiere el campo para enviar los datos
	}
	return true;
}


	