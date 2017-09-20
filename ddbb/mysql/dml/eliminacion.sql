--Borrar todos los clientes cuya población es Madrid
DELETE FROM clientes WHERE POBLACIÓN='MADRID'

--Borar todos los clientes que no hayan hecho pedidos
DELETE DISTINCTROW clientes.*, pedidos.CÓDIGOCLIENTE FROM clientes 
LEFT JOIN pedidos ON clientes.CÓDIGOCLIENTE=pedidos.CÓDIGOCLIENTE WHERE
pedidos.CÓDIGOCLIENTE IS NULL