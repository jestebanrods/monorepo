//JavaScript no es un lenguaje orientado a objetos, por lo que
//no existen las clases. Para "emular" una clase se usan los
//prototipos.

// const p1 = {
//     x: 0,
//     y: 4,
//     moveX(x) {
//         this.x += x
//     },
//     moveY(y){
//         this.y += y
//     }
// }

function Point(x, y) {
    this.x = x
    this.y = y
}

Point.prototype.moveX = function moveX(x) {
    this.x += x
}

Point.prototype.moveY = function moveY(y) {
    this.y += y
}

Point.prototype.pitagoras = function pitagoras(p) {
    const x = this.x - p.x
    const y = this.y - p.y
    return Math.sqrt(x * x + y * y).toFixed(2)
}

const p1 = new Point(0, 4)
const p2 = new Point(3, 0)

console.log(`La hipotenusa es: ${p1.pitagoras(p2)}`)

p1.moveX(2)
p2.moveX(5)

console.log(`La hipotenusa es: ${p1.pitagoras(p2)}`)
