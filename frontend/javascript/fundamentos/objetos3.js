class Point {
    constructor(x, y) {
        this.x = x
        this.y = y
    }

    moveX(x) {
        this.x += x
    }

    moveY(y) {
        this.y += y
    }

    pitagoras(p) {
        const x = this.x - p.x
        const y = this.y - p.y
        return Math.sqrt(x * x + y * y).toFixed(2)
    }
}

const p1 = new Point(0, 4)
const p2 = new Point(3, 0)

console.log(`La hipotenusa es: ${p1.pitagoras(p2)}`)

p1.moveX(2)
p2.moveX(5)

console.log(`La hipotenusa es: ${p1.pitagoras(p2)}`)
