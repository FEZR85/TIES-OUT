
	var errorCorreo = $("#errorCorreo");
	var errorContrasena = $("#errorContrasena");
	
/**************************************Inicio de sesion*****************************************/
    var formIniciaSesion = document.querySelector("#iniciaSesion"), //Tomo al formulario
   	   inputCorreo = formIniciaSesion.correo, //Tomo a la caja de texto
   	   inputContrasena = formIniciaSesion.contrasena,
       patron = /^([a-z0-9A-Z]+[\.-]?)+@(([a-z0-9A-Z]+[-]?[a-z0-9A-Z]+)+[\.]?){1,4}(\.[a-zA-Z]{1,5})$/; //Expresión regular de validación
    
    formIniciaSesion.addEventListener("submit", function(event){ //Cuando se intente enviar los datos
        event.preventDefault(); //Cancelo el envío
     
        if (inputCorreo.value != ""){ //Si el texto escrito concuerda con la expresión regular
	        	if(patron.test(inputCorreo.value) & inputContrasena.value != ""){
	            	formIniciaSesion.submit(); //Envío los datos del formulario
	        	}
	        	else if(!patron.test(inputCorreo.value) & inputContrasena.value == ""){
	        		errorCorreo.css('display','inline'); //Muestro un mensaje de error
	        		errorCorreo.text("El correo es incorrecto");
	            	inputCorreo.focus(); //Le añado un borde rojo a la caja de texto	

					errorContrasena.css('display','inline');
					errorContrasena.text("Ingrese una contraseña");
					inputContrasena.focus();
	        	}
	        	else if(!patron.test(inputCorreo.value)){
	        		errorContrasena.css('display','none');
					errorCorreo.css('display','inline'); //Muestro un mensaje de error
	        		errorCorreo.text("El correo es incorrecto");
	            	inputCorreo.focus(); //Le añado un borde rojo a la caja de texto	
				}
	        	else if(inputContrasena.value == ""){
	        		errorCorreo.css('display','none');
	        		errorContrasena.css('display','inline');
					errorContrasena.text("Ingrese una contraseña");
					inputContrasena.focus();
	        	}
			
        }
        else{ //Caso contrario
        	errorCorreo.css('display','inline'); //Muestro un mensaje de error
			errorCorreo.text("Ingrese un correo");
            inputCorreo.focus(); //Le añado un borde rojo a la caja de texto
        }
    }, false);
    


	