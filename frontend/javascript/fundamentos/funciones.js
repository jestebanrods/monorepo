let base = 10;
let heigth = 23;

function triangleArea(base, heigth) {
    return base * heigth / 2
}

const triangleAreaArrow = (base, heigth) => base * heigth / 2;

console.log(`El area de un triangulo de base ${base} y altura ${heigth} es ${triangleArea(base, heigth)}`);
console.log(`El area de un triangulo de base ${base} y altura ${heigth} es ${triangleAreaArrow(base, heigth)}`);