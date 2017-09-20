--1 Realizar una consulta que muestre los campos “Empresa” y “Población” de
--la tabla “Clientes”
SELECT EMPRESA, POBLACIÓN FROM clientes

--2 Realizar una consulta que muestre los artículos d la sección “Cerámica”
SELECT NOMBREARTÍCULO, SECCIÓN FROM productos WHERE SECCIÓN="CERÁMICA"

--3 Realizar una consulta que muestre los productos de la sección “Deportes”
--cuyo precio esté entre 100 y 200 €. En la consulta solo se mostrarán los
--campos “Nombre de artículo” y “Precio”.
SELECT NOMBREARTÍCULO, PRECIO, SECCIÓN FROM productos WHERE (PRECIO
BETWEEN 100 AND 200) AND SECCIÓN="DEPORTES"

--4 Realizar una consulta que muestre los productos cuyo país no sea España
SELECT NOMBREARTÍCULO, PAÍSDEORIGEN FROM productos WHERE PAÍSDEORIGEN!="ESPAÑA"

--5 Realizar una consulta que muestre los artículos españoles de la sección
--“Deportes” o aquellos cuyo precio sea superior a 350 € independientemente
--de cual sea su sección o país de origen.
SELECT * FROM productos WHERE (SECCIÓN="DEPORTES" AND PAÍSDEORIGEN="ESPAÑA")
OR PRECIO>350

--6 Realizar una consulta que muestre los productos cuya fecha esté entre
--1/05/2001 y 15/12/2001. En la consulta solo se visualizarán los campos
--“Nombre de artículo”, “Sección” y “Fecha”.
SELECT NOMBREARTÍCULO, SECCIÓN, FECHA FROM productos WHERE FECHA BETWEEN
'2000-05-01' AND '2001-12-15'
