const Point = {
    init: function init(x, y) {
        this.x = x
        this.y = y
    },
    moveX: function moveX(x) {
        this.x += x
    },
    moveY: function moveY(y) {
        this.y += y
    },
    pitagoras: function pitagoras(p) {
        const x = this.x - p.x
        const y = this.y - p.y
        return Math.sqrt(x * x + y * y).toFixed(2)
    }
}

const p1 = Object.create(Point)
const p2 = Object.create(Point)
p1.init(0, 4)
p2.init(3, 0)

console.log(`La hipotenusa es: ${p1.pitagoras(p2)}`)

p1.moveX(2)
p2.moveX(5)

console.log(`La hipotenusa es: ${p1.pitagoras(p2)}`)
