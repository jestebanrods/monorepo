function EjecutaIndividual() {
	document.getElementsByTagName('p')[0].onclick = Saludo;
	document.getElementById('Importante').onclick = Saludo;
}

function EjecutaTodos() {
	for (var i = 0; i < 3; i++) {
		document.getElementsByTagName('p')[i].onclick = Saludo;
	}
}

function EjecutaClase() {
	var x = document.getElementsByClassName('Importante')[0].onclick = Saludo;
}

function EjecutaQuery() {
	document.querySelector(".Importante").onclick = Saludo;
	document.querySelector("#Principal p:last-child").onclick = Saludo;
}

function EjecutaQueryAll() {
	var Elementos = document.querySelectorAll("#Principal p, span");
	for (var i = 0; i < Elementos.length; i++) {
		Elementos[i].onclick = Saludo;
	}
}

function Saludo() {
	alert('Hola Mundo');
}

window.onload = EjecutaQueryAll;