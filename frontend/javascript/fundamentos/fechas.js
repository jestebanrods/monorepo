//Date(año, mes-1, día)
const bornDate = new Date(1992, 11 - 1, 28);
const today = new Date();

//La resta entre fecha devuelve el tiempo en milisegundos
const seconds = (today - bornDate) / 1000;
const minutes = seconds / 60;
const hours = minutes / 60
const days = hours / 24;
const years = Math.floor(days / 365);
console.log(years);

const nextBirthday = new Date(today.getFullYear(), bornDate.getMonth(), bornDate.getDate());
console.log(bornDate);
console.log(nextBirthday);

//Domingo es el día 0 de las fechas
const daysName = [
    'Domingo',
    'Lunes',
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado'
];

console.log(`El día de su proximo cumpleaños será un ${daysName[nextBirthday.getDay()]}`);