--Consultar todos los campos de la tabla prodcutos, los cuales correspondan a
--las secciones tipo deporte y tipo cerámica. Ordenar los registro en función
--del tipo de sección de la Z-A
SELECT * FROM productos WHERE (SECCIÓN="DEPORTES" OR SECCIÓN="CERÁMICA")
ORDER BY SECCIÓN DESC

--Consultar todos los campos de la tabla prodcutos, los cuales correspondan a
--las secciones tipo deporte y tipo cerámica. Ordenar los registro en función
--del tipo de sección de la A-Z, y ordenado por precio de menor a mayor
SELECT * FROM productos WHERE (SECCIÓN="DEPORTES" OR SECCIÓN="CERÁMICA")
ORDER BY SECCIÓN, PRECIO
