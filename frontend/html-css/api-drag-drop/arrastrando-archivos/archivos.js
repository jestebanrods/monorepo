function comenzar() {
	var soltar = document.getElementById("zona_destino");
	soltar.addEventListener("dragenter", function(e) {
		e.preventDefault();
	}, false);
	soltar.addEventListener("dragover", function(e) {
		e.preventDefault();
	}, false);
    soltar.addEventListener("drop", function(e){
        e.preventDefault();
        var archivos = e.dataTransfer.files;
        var nombre="";
        var tamaño="";
        var tipo="";
        var total="";
        for(var i=0; i<archivos.length;i++){
            nombre=archivos[i].name;
            tamaño=(archivos[i].size/1024).toFixed(2);
            tipo=archivos[i].type;
            total+="Nombre: "+nombre+"<br>"+tamaño+"KB<br>"+tipo+"<br>";
            total+="-------------------------------------<br>";
        }
        soltar.innerHTML=total;
    }, false);
}

window.addEventListener("load", comenzar,false);