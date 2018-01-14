var expresionFuncional = function () {
	console.log("Expresión");
}

expresionFuncional();

// Inmediately Invoked Function Expression
// Función que se autoinvoca (ejecuta)
(function () {
	console.log("IIFE");
})();
