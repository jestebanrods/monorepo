class Clock {

    constructor() {
        this.name = 'Reloj Cucú'
        setInterval(() => {
            this.theTime()
        }, 1000)
    }

    theTime() {
        const addZero = (number) => number < 10 ? '0' + number : number

        let date = new Date(),
            hrs = addZero(date.getHours()),
            min = addZero(date.getMinutes()),
            sec = addZero(date.getSeconds())

        console.log(`${hrs}:${min}:${sec}`)
    }

    getName() {
        return this.name
    }

}

module.exports = Clock
