function comenzar() {
    var grabar = document.getElementById("grabar");
    grabar.addEventListener("click", itemNuevo, false);
}

function itemNuevo() {
    var clave = document.getElementById("clave").value;
    var valor = document.getElementById("area").value;
    sessionStorage.setItem(clave, valor);
    //sessionStorage[clave]=valor; // Sintaxis Alternativa
    //leer_ultimo(clave);
    leer_todo();
    document.getElementById("clave").value = "";
    document.getElementById("area").value = "";
}

function leer_ultimo(clave) {
    var zona_datos = document.getElementById("zona_datos");
    var valor = sessionStorage.getItem(clave);
    //var valor = sessionStorage[clave]; // Sintaxis Alternativa
    zona_datos.innerHTML = "";
    zona_datos.innerHTML += "<div>Clave:" + clave + " - Valor: " + valor + "</div><br>";
}

function leer_todo() {
    var zona_datos = document.getElementById("zona_datos");
    if (sessionStorage.key(0) == null) {
        zona_datos.innerHTML = "A La Espera";
    } else {
        zona_datos.innerHTML = "";
        zona_datos.innerHTML = "<input type='button' onclick='borrar_todo()' value='Eliminar Todo'>";
        for (var i = 0; i < sessionStorage.length; i++) {
            var clave = sessionStorage.key(i);
            var valor = sessionStorage.getItem(clave);
            zona_datos.innerHTML += "<div>Clave:" + clave + " - Valor: " + valor + "<br>";
            zona_datos.innerHTML += "<input type='button' onclick='borrar_item(\"" + clave + "\")'  value='Del'></div>"
        }
    }
}

function borrar_item(clave) {
    if (confirm("Estás Seguro")) {
        sessionStorage.removeItem(clave);
        leer_todo();
    }
}

function borrar_todo() {
    if (confirm("Estás Seguro")) {
        sessionStorage.clear();
        leer_todo();
    }
}

window.addEventListener("load", comenzar, false);

//Para no borrar las variables guardadas al cerrar pestaña cambiar el objeto sessionStorage -> localStorage