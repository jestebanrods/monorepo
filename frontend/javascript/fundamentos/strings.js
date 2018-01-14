const platzom = (word) => {
    let translation = word;

    //Si la palabra termina en 'ar'
    //Se quitan los ultimos dos caracteres
    if (word.toLowerCase().endsWith('ar')) {
        return translation.slice(0, -2);
    }

    //Si la palabra comienza con 'z'
    //Se le añade 'pe' al final
    if (word.toLowerCase().startsWith('z')) {
        return translation += 'pe';
    }

    //Si la palabra tiene mas de 10 letras
    //Se debe dividir a la mitad y unir con un guíon
    if (word.length >= 10) {
        const firstHalf = translation.slice(0, Math.round(word.length / 2));
        const secondHalf = translation.slice(word.length / 2);
        return firstHalf + '-' + secondHalf;
    }

    const reverse = (str) => str.split('').join('');

    function minMay(str) {
        const length = str.length;
        let translation = '';
        let capitalize = true;
        for (let i = 0; i < length; i++) {
            const char = str.charAt(i);
            translation += capitalize ? char.toUpperCase() : char.toLowerCase();
            capitalize = !capitalize;
        }
        return translation;
    }

    //Si la palabra es un palindromo
    //No se cuentan las otras reglas y se devuelve la palabra
    //Intercalas mayusculas y minusculas
    if (word === reverse(word)) {
        return minMay(word);
    }
};

console.log(platzom('programar'));
console.log(platzom('zorro'));
console.log(platzom('abecedario'));
console.log(platzom('sometemos'));