
	var errorCorreo = $("#errorCorreo");
	var errorContrasena = $("#errorContrasena");
	
/**************************************Inicio de sesion*****************************************/
    var formIniciaSesion = document.querySelector("#iniciaSesion"), //Tomo al formulario
   		patronCorreo = /^([a-z0-9A-Z]+[\.-]?)+@(([a-z0-9A-Z]+[-]?[a-z0-9A-Z]+)+[\.]?){1,4}(\.[a-zA-Z]{1,5})$/, //Expresión regular de validación del campo Correo
       	patronAlfabetico = /^([a-zA-Z]+[\s]*)+$/, //Campos: Nombre, Ocupación
       	patronContrasena = /^([a-zA-Z0-9]{6,20})$/;//Campo: Contraseña
       	


    formIniciaSesion.addEventListener("submit", function(event){ //Cuando se intente enviar los datos
        event.preventDefault(); //Cancelo el envío
     
     	var contrasena = "",
       		campoCorrecto = true, //true = esta correcto el campo, false = tiene error
       		enviar = true;

     	for (var i = 0; i<formIniciaSesion.length && formIniciaSesion[i].tagName == "INPUT" ; i++) {
     		if(formIniciaSesion[i].value == ""){//Error si está vacío el campo
     			campoCorrecto = false;
     		}else{
     			if(formIniciaSesion[i].id == "correo"){//Caso especial para campo correo
     				if(!patronCorreo.test(formIniciaSesion[i].value)){
     					campoCorrecto = false;
     				}
     			}else if(formIniciaSesion[i].id == "contrasena" || formIniciaSesion[i].id == "rptContrasena"){//Caso especial para campo contaseña
     				if(!patronContrasena.test(formIniciaSesion[i].value)){
     					campoCorrecto = false;
     				}else{
     					if(formIniciaSesion[i].id == "rptContrasena"){
     						if(contrasena != formIniciaSesion.value){
     							campoCorrecto = false;     							
     						}
     					}else{
     						contrasena = formIniciaSesion[i].value;
     					}
     				}
     			}else if(formIniciaSesion[i].id == "nombre" || formIniciaSesion[i].id == "ocupacion"){//Caso para campos de solo letras
     				if(!patronAlfabetico.test(formIniciaSesion[i].value)){
     					campoCorrecto = false;
     				}
     			}else{//Los demás campos que no requieren validación

     			}
     		}

     		if(!campoCorrecto){   			 			
     			jQuery(formIniciaSesion[i]).addClass("campoError");
     			campoCorrecto = true;
     			enviar = false;
     		}else{
     			if(jQuery(formIniciaSesion[i]).hasClass("campoError")){
     				jQuery(formIniciaSesion[i]).removeClass("campoError");
     			}
     		}
     	}

     	if(enviar == true){
     		formIniciaSesion.submit();
     	}else{

     	}

    }, false);
    


	