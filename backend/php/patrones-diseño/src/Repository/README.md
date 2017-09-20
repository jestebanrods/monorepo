**Patrón Repository:** 
-
Consiste en crear una clase que contenga todos los métodos relacionados con una tarea repetitiva, como por ejemplo 
las consultas(_querys_) de unn base de datos. El fin de este patrón es que se usen los métodos sin importar el como 
esten construidos.
 
En caso de que a futuro se modifiquen dichos métodos, ya sea para optimizar o para refactorizar, su funcionalidad es la 
misma y el código que depende de ellos no variará en absoluto.