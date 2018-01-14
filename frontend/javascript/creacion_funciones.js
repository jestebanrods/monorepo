function saludar() {
    console.log("Hola Jossie");
}

function saludar(nombre) {
    return ("Hola " + nombre);
}

function mayusculas(palabra) {
    return palabra.toUpperCase();
}

var colores = ["azul", "blanco", "negro", "amarillo", "morado"];

function borrarElementoMatriz(elemento, matriz) {
    var indice = matriz.indexOf(elemento);
    if (indice != -1) {
        matriz.splice(indice, 1);
    }
}

borrarElementoMatriz("morado", colores);
console.log(colores);
