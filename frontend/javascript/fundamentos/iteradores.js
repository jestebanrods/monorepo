function fibonacci(numero) {
    let a = 0, b = 1
    return {
        next: function (reset) {
            if (reset) a = 0, b = 1
            let f = a
            a = b
            b = f + b
            return {value: f, done: false}
        }
    }
}

const fibo = fibonacci()

let serie = ''
let cantidad = 20

for (let i = 0; i < cantidad; i++) {
    serie += fibo.next().value + ' '
}

console.log(serie)