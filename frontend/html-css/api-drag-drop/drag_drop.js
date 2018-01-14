var elemento_origen;
var elemento_destino;

function comenzar() {
    elemento_origen = document.getElementById("imagen");
    elemento_destino = document.getElementById("zona_destino");
    elemento_origen.addEventListener("dragstart", arrastrar, false);
    elemento_origen.addEventListener("dragend", terminado, false);
    elemento_destino.addEventListener("dragenter", entrando, false);
    elemento_destino.addEventListener("dragleave", saliendo,false);
    elemento_destino.addEventListener("dragover", reiniciar_navegador, false);
    elemento_destino.addEventListener("drop", soltar, false);
    
}

function saliendo(e){
    e.preventDefault();
    elemento_destino.style.background="#FFF";
}

function entrando(e){
    e.preventDefault();
    elemento_destino.style.background="rgba(8,252,25,.8)";
}

function reiniciar_navegador(e) {
    e.preventDefault();
}

function arrastrar(e) {
    var codigo = "<img src='" + elemento_origen.getAttribute("src") + "'>";
    e.dataTransfer.setData("Text", codigo);
}

function soltar(e) {
    e.preventDefault();
    elemento_destino.innerHTML = e.dataTransfer.getData("Text");
    elemento_destino.style.background="#FFF";
}

function terminado(e){
    var elemento=e.target;
    elemento.style.visibility="hidden";
}

window.addEventListener("load", comenzar, false);
