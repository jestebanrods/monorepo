require('es6-promise').polyfill();
require('isomorphic-fetch');

fetch('http://swapi.co/api/people/1/')
    .then(reponse => reponse.json())
    .then(json => {
        console.log(`Nombre: ${json.name}`)
        return fetch(json.homeworld)
    })
    .then(reponse => reponse.json())
    .then(json => {
        console.log(`Planeta: ${json.name}`)
    })
    .catch(error => {
        if (error) return console.log(`${error}`)
    })
