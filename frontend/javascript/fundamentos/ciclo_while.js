let lifeGoku = 100;
let lifeSuperMan = 100;

const MIN_POWER = 5;
const MAX_POWER = 12;

let round = 1;

const bothLives = () => lifeGoku > 0 && lifeSuperMan > 0;
const calcPower = () => Math.round(Math.random() * (MAX_POWER - MIN_POWER) + MIN_POWER);

while (bothLives()) {
    console.log(`Round ${round}`);

    const powerGoku = calcPower();
    const powerSuperMan = calcPower();

    if (powerGoku > powerSuperMan) {
        lifeSuperMan -= powerGoku;
        console.log(`Goku ataca con un golpe de ${powerGoku}`);
        console.log(`Vida restante de Superman = ${lifeSuperMan}`);
    } else {
        lifeGoku -= powerSuperMan;
        console.log(`Superman ataca con un golpe de ${powerSuperMan}`);
        console.log(`Vida restante de Goku = ${lifeGoku}`);
    }
    round++;
}

if (lifeGoku > 0) {
    console.log(`Goku ganó la pelea. Su vida es ${lifeGoku}`)
} else {
    console.log(`Superman ganó la pelea. Su vida es ${lifeSuperMan}`)
}