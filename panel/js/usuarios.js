function cargaUsuarios(boton){
					
					var filaUsuarios=boton.parentNode.parentNode;
					var hijosUsuarios=filaUsuarios.children;
					var misUsuarios=document.getElementsByClassName("misUsuarios")[0];
				
					misUsuarios.login.value=hijosUsuarios[0].innerHTML;
                                        misUsuarios.login.setAttribute("readonly", "readonly");
					misUsuarios.password.value=hijosUsuarios[1].innerHTML;
                                        misUsuarios.nombre.value=hijosUsuarios[2].innerHTML;
					misUsuarios.rol.value=hijosUsuarios[3].innerHTML;
					
					// Activar botón de actualizar.
					
					misUsuarios.actualizaUsuarios.style.display='inline';
					misUsuarios.anadeUsuarios.style.display='none';
					
				}
                                
function limpiar(){
    var misUsuarios=document.getElementsByClassName("misUsuarios")[0];
    misUsuarios.actualizaUsuarios.style.display='none';
    misUsuarios.anadeUsuarios.style.display='inline';
    misUsuarios.login.removeAttribute("readonly");
}
                                
function validarUsuarios(formulario){

        if(formulario.login.value==null || /^\s+$/.test(formulario.login.value)){
			
				alert("Campo \"Login\" vacío o con espacios en blanco.");
				formulario.login.focus();
				formulario.login.style.backgroundColor="#FF9999";
				return false;
				}
                                
        if(formulario.password.value==null || /^\s+$/.test(formulario.password.value)){
			
				alert("Campo \"Password\" vacío o con espacios en blanco.");
				formulario.password.focus();
				formulario.password.style.backgroundColor="#FF9999";
				return false;
				}
                                
        if(formulario.nombre.value==null || /^\s+$/.test(formulario.nombre.value)){
			
				alert("Campo \"Nombre\" vacío o con espacios en blanco.");
				formulario.nombre.focus();
				formulario.nombre.style.backgroundColor="#FF9999";
				return false;
				}
                                
        if(formulario.rol.value==null || /^\s+$/.test(formulario.rol.value)){
			
				alert("Campo \"Rol\" vacío o con espacios en blanco.");
				formulario.rol.focus();
				formulario.rol.style.backgroundColor="#FF9999";
				return false;
				}
                                
        if(formulario.rol.value<1 || formulario.rol.value>2){
			
				alert("Campo \"Rol\" no permitido, solo 1 o 2.");
				formulario.rol.focus();
				formulario.rol.style.backgroundColor="#FF9999";
				return false;
				}
                                
    return true;
        
}                         

