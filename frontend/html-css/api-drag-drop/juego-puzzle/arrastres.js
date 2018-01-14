function comenzar() {
	var imagenes = document.querySelectorAll("#caja_imagen img");
	var zona_destino = document.getElementById("zona_arrastre");
    var id, bandera=false;
	for	(var i=0; i<imagenes.length; i++){
        //Sostener Moverse
		imagenes[i].addEventListener("dragstart", function(e){
			var elemento = e.target;
            id=elemento.getAttribute("id");
		}, false);
        if(i!=1){
            //Dejar Sostener
            imagenes[i].addEventListener("dragend", function(e){
                    var elemento = e.target;
                    if(bandera){
                        elemento.style.visibility="hidden";
                        bandera=false;
                    }
            },false);
        }
	}
	//Al Entrar
	zona_destino.addEventListener("dragenter", function(e){
        bandera=true;
        e.preventDefault();
        if(id!="img2"){
            zona_destino.style.background="rgba(8,252,25,.8)";
        }else{
            zona_destino.style.background="rgba(255,0,25,.8)";    
        }
        
	}, false);
    //Al Salir 
    zona_destino.addEventListener("dragleave", function(e){
        bandera=false;
		e.preventDefault();
        zona_destino.style.background="#FFF";
	}, false);
	//Sobre
	zona_destino.addEventListener("dragover", function(e){
        if(id!="img2"){
            e.preventDefault();   
        }
	}, false);
	//Soltar
	zona_destino.addEventListener("drop", function(e){
		e.preventDefault();
        var src=document.getElementById(id).src;
        if(id!="img2"){
            zona_destino.innerHTML="<img src='" + src + "'>";
            zona_destino.style.background="#FFF";    
        }
	}, false);
}

window.addEventListener("load", comenzar, false);