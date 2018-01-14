var MiVideo, Reproducir, Barra, Progreso, Maximo;
Maximo = 420;

function Comenzar() {
	MiVideo = document.getElementById('MiVideo');
	Reproducir = document.getElementById('Reproducir');
	Barra = document.getElementById('Barra');
	Progreso = document.getElementById('Progreso');

	Reproducir.addEventListener('click', Play, false);
	Barra.addEventListener('click', Adelantar, false);
}

function Play() {
	if ((MiVideo.paused == false) && (MiVideo.ended == false)) {
		MiVideo.pause();
		Reproducir.innerHTML = 'Play';
	} else {
		MiVideo.play();
		Reproducir.innerHTML = 'Pause';
		Bucle = setInterval(Avanzar, 50);
	}
}

function Avanzar() {
	if (MiVideo.ended == false) {
		var Total = parseInt((MiVideo.currentTime * Maximo) / MiVideo.duration);
		Progreso.style.width = Total + "px";
	}
}

function Adelantar(Posicion) {
	if ((MiVideo.paused == false) && (MiVideo.ended == false)) {
		var PosX = Posicion.pageX - Barra.offsetLeft;
		var NuevoTiempo = (PosX * MiVideo.duration) / Maximo;
		MiVideo.currentTime = NuevoTiempo;
		Progreso.style.width(PosX + "px");
	}
}

window.addEventListener('load', Comenzar, false);