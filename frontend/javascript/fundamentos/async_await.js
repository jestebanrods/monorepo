//Node JS no soporta ECMAScript 6 por lo que toca usar
//Babel, que es un transpilador de código ECMAScript 2015(6)
//ECMAScript 5

require('es6-promise').polyfill();
require('isomorphic-fetch');

async function getLuke() {
    try {
        const response = await fetch('http://swapi.co/api/people/1/')
        const luke = await response.json()
        const response = await fetch(luke.homeworld)
        const planet = await response.json()
        console.log(`${luke.name} nacio en ${planet.name}.`)
    } catch (error) {
        if (error) return console.log(`${error}`)
    }
}

getLuke()