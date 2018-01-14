const name = 'Jossie';
const days = [
    'lunes',
    'martes',
    'miercoles',
    'jueves',
    'viernes',
    'sabado',
    'domingo'
];

const run = () => {
    const max = 15;
    const min = 5;
    return Math.round(Math.random() * (max - min) + min);
};

for (let i = 0; i < days.length; i++) {
    console.log(`El día ${i + 1} de la semana es ${days[i]}.`)
}

console.log(`-------`);

let kms = 0;
for (let i = 0; i < days.length; i++) {
    const km = run();
    kms += km;
    console.log(`El día ${days[i]} ${name} corrío ${km}km`);
}

console.log(`${name} corrío en total ${kms}kms`);
const average = kms / days.length;
console.log(`${name} corrío en promedio ${average.toFixed(2)}kms díarios`);