--Consultar cuantos suman en precio los articulos que hay en cada seccion
SELECT SECCIÓN, SUM(PRECIO) FROM productos GROUP BY SECCIÓN

--Consultar cuantos suman en precio los articulos que hay en cada seccion.
--Ordenar la sumatoria de menor a mayor
SELECT SECCIÓN, SUM(PRECIO) AS SUMA_ARTICULOS FROM productos GROUP BY SECCIÓN
ORDER BY SUMA_ARTICULOS

--Consultar cual es el promedio de precios de los articulos que hay en
--las secciones "Cerámica" y "Deportes". Ordenar la sumatoria de menor a mayor
SELECT SECCIÓN, AVG(PRECIO) AS MEDIA FROM productos WHERE (SECCIÓN="CERÁMICA"
OR SECCIÓN="DEPORTES") GROUP BY SECCIÓN ORDER BY MEDIA

SELECT SECCIÓN, AVG(PRECIO) AS MEDIA FROM productos GROUP BY SECCIÓN
HAVING (SECCIÓN="CERÁMICA"OR SECCIÓN="DEPORTES") ORDER BY MEDIA

--Consultar cuantos clientes son de cada región
SELECT POBLACIÓN, COUNT(CÓDIGOCLIENTE) AS CLIENTES FROM clientes
GROUP BY POBLACIÓN ORDER BY CLIENTES

--Consultar el articulo con el precio mas alto en la sección de "Confección"
SELECT SECCIÓN, MAX(PRECIO) FROM productos GROUP BY SECCIÓN
HAVING SECCIÓN="CONFECCIÓN"

--Cada vez que se usan las funciones de agregado, es indispensable solo usar
--el campo de grupo y dicha función, ya que al agregar mas campos, la consulta
--arroja valores erroneos
