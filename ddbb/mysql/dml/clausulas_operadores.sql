--Extrae los campos nombre del artículo, sección y precio de la tabla productos
--donde la sección sea tanto de tipo cerámica
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO FROM productos WHERE SECCIÓN="CERÁMICA"

--Extrae los campos nombre del artículo, sección y precio de la tabla productos
--donde la sección sea tanto de tipo cerámica como de tipo deportes
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO FROM productos WHERE SECCIÓN="CERÁMICA"
OR SECCIÓN="DEPORTES"

--Extrae los campos nombre del artículo, sección, precio y país de origen de la
--tabla productos donde la sección sea de tipo deportes y que sean importados de USA
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM productos
WHERE SECCIÓN="DEPORTES" AND PAÍSDEORIGEN="USA"

--Extrae todos los campos de la tabla productos en los cuales la fecha este
--entre marzo y abril del 2000
SELECT * FROM productos WHERE FECHA BETWEEN '2000-03-01' AND '2000-04-30'
|