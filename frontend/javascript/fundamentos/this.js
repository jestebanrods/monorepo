//El this dentro de una función ejecutada dentro de un método en un
//objeto, es undefined, debido al alcance 'scope' que tiene ellos por
//ello se puede solucionar de las siguientes maneras

//Solución 1
class Persona {
    constructor(nombre, ...amigos) {
        this.nombre = nombre
        this.amigos = amigos
    }

    listarAmigos() {
        const _this = this
        this.amigos.forEach(function (amigo) {
            console.log(`Hola soy ${_this.nombre} y soy amigo de ${amigo}`)
        })
    }
}

//Solución 2
class Persona2 {
    constructor(nombre, ...amigos) {
        this.nombre = nombre
        this.amigos = amigos
    }

    listarAmigos() {
        this.amigos.forEach(amigo => {
            console.log(`Hola soy ${this.nombre} y soy amigo de ${amigo}`)
        })
    }
}


//Solución 3
class Persona3 {
    constructor(nombre, ...amigos) {
        this.nombre = nombre
        this.amigos = amigos
    }

    listarAmigos() {
        this.amigos.forEach(function (amigo) {
            console.log(`Hola soy ${this.nombre} y soy amigo de ${amigo}`)
        }.bind(this))
    }
}

const jossie = new Persona('Jossie', 'Alex', 'Cristian')
jossie.listarAmigos()

const esteban = new Persona2('Esteban', 'Roberto', 'Pacheco')
esteban.listarAmigos()

const ana = new Persona3('Ana', 'Camila', 'Valentina')
ana.listarAmigos()
