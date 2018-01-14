function saludarFamilia(apellido) {
    return function saludorMiebroFamilia(nombre) {
        console.log(`Hola ${nombre} ${apellido}`)
    }
}

const saludarRodriguez = saludarFamilia('Rodríguez')
const saludarSalazar = saludarFamilia('Salazar')

saludarRodriguez('Jossie')
saludarRodriguez('Valentina')
saludarRodriguez('Esteban')

saludarSalazar('Maryory')
saludarSalazar('Cristian')

const crearPrefijo = prefijo => palabra => console.log(prefijo + palabra)
const prefijoRe = crearPrefijo('re')

prefijoRe('bueno')
prefijoRe('malo')