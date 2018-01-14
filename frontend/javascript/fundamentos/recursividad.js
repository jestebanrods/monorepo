function fibonacci(numero) {
    if (numero == 1) return 0
    if (numero == 2) return 1
    return fibonacci(numero - 1) + fibonacci(numero - 2)
}

let serie = ''
for (let i = 1; i <= 10; i++) {
    serie += fibonacci(i) + ' '
}

console.log(serie)