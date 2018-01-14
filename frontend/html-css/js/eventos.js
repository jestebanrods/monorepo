var Imagen;

function Imagen() {
	alert('Sacatar');
}

function TipoImagen() {
	document.getElementsByTagName('img')[0].onclick = Flor;
}

function TipoImagenEvento() {
	Imagen = document.getElementsByTagName('img')[0];
	Imagen.addEventListener('click', Flor, false);
}

function ManejaImagen() {
	Imagen = document.getElementsByTagName('img')[0];
	Imagen.addEventListener('mouseover', Crecer, false);
	Imagen.addEventListener('mouseout', Menguar, false);
	Imagen.addEventListener('click', Flor, false);
}

function Crecer() {
	Imagen.width=225;
	Imagen.height=225;
}

function Menguar() {
	Imagen.width=200;
	Imagen.height=200;	
}

window.onload = ManejaImagen;