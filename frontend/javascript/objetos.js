var libro = {
    titulo: "IT",
    autor: "Stephen King",
    genero: "Terror",
    valoracion: 9,
    tags: ["payaso", "Pennywise", "floating", "Derry"]
};

delete(libro.genero);
console.log(libro.autor);
console.log(libro["valoracion"]);

for (var propiedad in libro) {
    console.log(propiedad + ": " + libro[propiedad]);
}
