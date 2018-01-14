const XMLHttpRequest = require('xmlhttprequest').XMLHttpRequest;

function get(URL, callback) {
    const xhr = new XMLHttpRequest()

    xhr.onreadystatechange = function () {
        const DONE = 4
        const OK = 200
        if (this.readyState == DONE) {
            if (this.status == OK) {
                callback(null, JSON.parse(this.responseText))
            } else {
                callback(new Error(`Error en el request. Estado: ${this.status}`))
            }
        }
    }

    xhr.open('GET', URL)
    xhr.send(null)
}

function handleError(error) {
    if (error) return console.log(`${error}`)
}

get('http://swapi.co/api/people/1/', (error, json) => {
    handleError(error)
    console.log(`Nombre: ${json.name}`)
    get(json.homeworld, (error, json) => {
        handleError(error)
        console.log(`Planeta: ${json.name}`)
    })
})