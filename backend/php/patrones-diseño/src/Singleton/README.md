**Patrón Singleton:** 
-
Consiste en crear una clase que solo pueda contener una unica instancia. Esta instancia es compartida.

Ejemplo:

Objeto principal: `Configurar`

En ves de crear un constructor, se crea un método estatico el cual devuelve un objeto de si mismo en caso
de que no se haya creado anteriormente. En caso de que ya exista, devuelve la instancia del objeto existente.

`Configurar::getInstance()`