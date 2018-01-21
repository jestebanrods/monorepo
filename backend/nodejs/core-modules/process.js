//Uso del modo estricto
'use strict'

//El módulo process son las características del proceso de ejecución del script
console.log(`Id Proceso: ${process.pid}`)
console.log(`Tiempo Ejecución: ${process.uptime()}`)
console.log(`Path Actual: ${process.cwd()}`)
console.log(`Argumentos: ${process.argv}`)

//Por defecto los argumentos pasados al archivos (argv) son: 
//[0] ruta del ejecutable de node
//[1] ruta del script a ejecutar
