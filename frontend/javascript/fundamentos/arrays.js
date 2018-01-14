//...Spread Operator
//Devuelve un array con todos los parametros que se envian

//Función reduce, devuelve el resultado de una operación especificada
//como el parametro inicial de la siguiente operación, esto, con cada
//uno de los elementos del array
function suma(...numeros) {
    return numeros.reduce(function (acum, numero) {
        acum += numero
        return acum
    }, 0);
}

//Función map, ejecuta un callback con una operación en especifco y este
//devuelve el resultado de la operación de cada uno de esos elementos.
const dobles = (...numeros) => numeros.map(numero => numero * 2)

//Función filter, en el callback se realiza una operación booleana si es true,
//el elemento del array que ejecuto la operación de dicha función es almacenado
//en el array de salida del filter, si es false no.
const pares = (...numeros) => numeros.filter(numero => numero % 2 === 0)

console.log(`${suma(1, 2, 5, 7)}`)
console.log(`${dobles(1, 3, 6, 9)}`)
console.log(`${pares(1, 3, 4, 7, 8, 0)}`)