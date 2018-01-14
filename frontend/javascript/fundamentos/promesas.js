const XMLHttpRequest = require('xmlhttprequest').XMLHttpRequest;

function get(URL) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest()

        xhr.onreadystatechange = function () {
            const DONE = 4
            const OK = 200
            if (this.readyState == DONE) {
                if (this.status == OK) {
                    resolve(JSON.parse(this.responseText))
                } else {
                    reject(new Error(`Error en el request. Estado: ${this.status}`))
                }
            }
        }

        xhr.open('GET', URL)
        xhr.send(null)
    })
}

get('http://swapi.co/api/people/1/')
    .then(json => {
        console.log(`Nombre: ${json.name}`)
        return get(json.homeworld)
    })
    .then(json => {
        console.log(`Planeta: ${json.name}`)
    })
    .catch(error => {
        if (error) return console.log(`${error}`)
    })
