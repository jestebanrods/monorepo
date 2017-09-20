--Relacionar el contenido de dos tablas a partir de un mismo campo, en este
--caso el campo es el código cliente. Esto dara como resultado una tabla que
--contenga los registros que compartan el mismo código cliente de ambas tablas.
--Permite ver los clientes que han hecho pedidos.
SELECT * FROM clientes INNER JOIN pedidos
ON clientes.CÓDIGOCLIENTE = pedidos.CÓDIGOCLIENTE WHERE POBLACIÓN="MADRID"

--Extraer clientes que no tengan pedidos en madrid
SELECT * FROM clientes LEFT JOIN pedidos
ON clientes.CÓDIGOCLIENTE = pedidos.CÓDIGOCLIENTE WHERE POBLACIÓN="MADRID" AND
pedidos.CÓDIGOCLIENTE IS NULL

--Extraer todas las empresas que hayan hecho ´pedidos, mostras una sola vez
--el nombre de la empresa, independientemente que hay hecho muchos pedidos
SELECT DISTINCT EMPRESA FROM clientes INNER JOIN pedidos 
ON clientes.CÓDIGOCLIENTE=pedidos.CÓDIGOCLIENTE

--DISTINCTROW no repide el valor si todos los campos de la tabla son inguales