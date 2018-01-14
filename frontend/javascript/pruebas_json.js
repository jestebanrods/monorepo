var libroJSON = require("./libro.json");
var libro = require("./libro.js");

console.log(libroJSON.autor);

var a = Object.create(libro);
a.autor = "Jossie";
a.resumen();
console.log(a.autor);
