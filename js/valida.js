
	var errorCorreo = $("#errorCorreo");
	var errorContrasena = $("#errorContrasena");
	
/**************************************Inicio de sesion*****************************************/
    var formulario = document.querySelector("#formulario"), //Tomo al formulario
   		patronCorreo = /^([a-z0-9A-Z]+[\.-]?)+@(([a-z0-9A-Z]+[-]?[a-z0-9A-Z]+)+[\.]?){1,4}(\.[a-zA-Z]{1,5})$/, //Expresión regular de validación del campo Correo
       	patronAlfabetico = /^([a-zA-Z]+[\s]*)+$/, //Campos: Nombre, Ocupación
       	patronContrasena = /^([a-zA-Z0-9]{6,20})$/;//Campo: Contraseña
       
    formulario.addEventListener("submit", function(event){ //Cuando se intente enviar los datos
        event.preventDefault(); //Cancelo el envío
     
     	var contrasena = "",
       		campoCorrecto = true, //true = esta correcto el campo, false = tiene error
       		enviar = true;

     	for (var i = 0; i<formulario.length && formulario[i].tagName == "INPUT" ; i++) {
     		if(formulario[i].value == ""){//Error si está vacío el campo
     			campoCorrecto = false;
     		}else{
     			if(formulario[i].id == "correo"){//Caso especial para campo correo
     				if(!patronCorreo.test(formulario[i].value)){
     					campoCorrecto = false;
     				}
     			}else if(formulario[i].id == "contrasena" || formulario[i].id == "rptContrasena"){//Caso especial para campo contaseña
     				if(!patronContrasena.test(formulario[i].value)){
     					campoCorrecto = false;
     				}else{
     					if(formulario[i].id == "rptContrasena"){
     						if(contrasena == formulario[i].value){
     							campoCorrecto = true;
     						}else{
     							campoCorrecto = false;
     						}
     					}else{
     						contrasena = formulario[i].value;
     					}
     				}
     			}else if(formulario[i].id == "nombre" || formulario[i].id == "ocupacion"){//Caso para campos de solo letras
     				if(!patronAlfabetico.test(formulario[i].value)){
     					campoCorrecto = false;
     				}
     			}else{//Los demás campos que no requieren validación

     			}
     		}

     		if(!campoCorrecto){   			 			
     			jQuery(formulario[i]).addClass("campoError");
     			campoCorrecto = true;
     			enviar = false;
     		}else{
     			if(jQuery(formulario[i]).hasClass("campoError")){
     				jQuery(formulario[i]).removeClass("campoError");
     			}
     		}
     	}

     	if(enviar == true){
     		formulario.submit();
     	}else{

     	}

    }, false);
    


	