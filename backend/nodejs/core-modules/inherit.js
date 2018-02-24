const EventEmmiter = require('events').EventEmitter,
    inherits = require('util').inherits

class Clock {
    constructor() {
        inherits(Clock, EventEmmiter)
        setInterval(() => {
            this.emit('tictac')
        }, 1000)
    }
    theTime() {
        let date = new Date(),
            hrs = date.getHours(),
            min = date.getMinutes(),
            sec = date.getSeconds()

        console.log(`${hrs}:${min}:${sec}`)
    }
}

let cucu = new Clock()

cucu.on('tictac', function () {
    this.theTime()
})
