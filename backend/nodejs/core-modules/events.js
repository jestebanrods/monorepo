const EventEmmiter = require('events').EventEmitter
const pub = new EventEmmiter()

pub.on('myevent', (message) => {
    console.log(message)
})

pub.once('myevent', (message)=>{
    console.log(`Primera emisión del evento. ${message}`)
})

pub.emit('myevent','Soy un emisor de evento.')
pub.emit('myevent','Volviendo a emitir')

pub.removeAllListeners('myevent')
pub.emit('myevent','Volviendo a emitir por última vez')
