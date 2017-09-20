--1 Realizar una consulta sobre la tabla “Clientes”  que muestre los campos
--“Dirección”, “Teléfono” y “Población”. Este último debe aparecer en la
--consulta con el nombre de “Residencia”. Los registros aparecerán ordenados
--descendentemente por el campo “Población”.
SELECT DIRECCIÓN, TELÉFONO, POBLACIÓN AS RESIDENCIA FROM clientes
ORDER BY POBLACIÓN DESC

--2 Realizar una consulta que muestre que poblaciones hay en la tabla “Clientes”.
SELECT POBLACIÓN FROM clientes GROUP BY POBLACIÓN

--3 Realizar una consulta de agrupación que muestre la media del precio de los
--artículos de todas las secciones. Mostrar en la consulta los campos sección
--y suma por sección.
SELECT SECCIÓN, AVG(PRECIO) AS MEDIA FROM productos GROUP BY SECCIÓN

--4 Realizar una consulta de agrupación que muestre la media del precio de
--todas las secciones menos de juguetería. En la consulta deberán aparecer
--los campos “Sección” y “Media por sección”.
SELECT SECCIÓN, AVG(PRECIO) AS MEDIA FROM productos
WHERE SECCIÓN!="JUGUETERÍA" GROUP BY SECCIÓN

--5 Realizar una consulta que muestre cuantos artículos hay de la
--sección “Deportes”.
SELECT SECCIÓN, COUNT(CÓDIGOARTÍCULO) FROM productos WHERE SECCIÓN="DEPORTES"
