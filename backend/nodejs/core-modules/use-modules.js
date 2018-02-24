const myData = require('./modules'),
    Clock = require('./Clock')

let reloj = new Clock()

console.log(
    myData.name,
    myData.email,
    reloj.getName()
)
