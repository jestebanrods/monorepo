var marcas = [
    "Renault",
    "Seat",
    "Hyundai",
    "Cherry",
    "Chevrolet"
];

console.log(marcas);
console.log(marcas[2]);
marcas[1] = "Ford";
console.log(marcas);

// Metodos
// Shift -> Borrar el primer elemento de la matriz y lo retorna
var primero = marcas.shift();
// Pop -> Borrar el ultimo elemento de la matriz y lo retorna
var ultimo = marcas.pop();
console.log(marcas, primero, ultimo);
// Push -> Agrega el elemento al final de la matriz
marcas.push("Fotón");
console.log(marcas);
// Splice -> Añadir o Borrar un elemnto en concreto
// Borrar a partir del indice 1, borrar los 2 siguientes 
marcas.splice(1, 2);
console.log(marcas);
// Agrega a partir del indice 2
marcas.splice(2, 0, "Jossie", "Carro");
console.log(marcas);
// Indexof -> Retorna la posición del elemento indicado, sino existe devuelve -1
console.log(marcas.indexOf("Jossie"));

marcas.forEach(function(elementos) {
    console.log(elementos);
});

for (elementos of marcas) {
    console.log(elementos);
}
