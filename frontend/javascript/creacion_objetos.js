var persona = {
    nombre: null,
    edad: null,
    ciudad: null,
    presentar: function() {
        if (this.nombre) {
            console.log("Hola me llamo " + this.nombre);
        } else {
            console.log("Nombre no asignado");
        }
    }
};

var jossie = Object.create(persona);
var esteban = Object.create(persona);

//jossie.nombre = "Jossie";
esteban.nombre = "Esteban";

jossie.presentar();
esteban.presentar();


// Objetos con constructores
function Persona(nombre, profesion) {
    this.nombre = nombre;
    this.profesion = profesion;
};
var richard = new Persona("Richard", "Developer");
console.log(richard.nombre);
