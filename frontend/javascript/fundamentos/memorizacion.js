function fibonacci(numero, memoria = {}) {
    if (memoria[numero]) return memoria[numero]
    if (numero == 1) return 0
    if (numero == 2) return 1
    return memoria[numero] = fibonacci(numero - 1, memoria) + fibonacci(numero - 2, memoria)
}

let serie = ''
for (let i = 1; i <= 10; i++) {
    serie += fibonacci(i) + ' '
}

console.log(serie)
