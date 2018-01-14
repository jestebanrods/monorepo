function* fibonacci(numero) {
    let a = 0, b = 1
    while (true) {
        let f = a
        a = b
        b = f + b
        let reset = yield f
        if (reset) a = 0, b = 1
    }
}

const fibo = fibonacci()

let serie = ''
let cantidad = 20

for (let i = 0; i < cantidad; i++) {
    serie += fibo.next().value + ' '
}

console.log(serie)
