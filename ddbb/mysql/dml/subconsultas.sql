--Consultar los productos en la sección deportes que tengan un valor por encima
--de la media de dicha sección. Conuslta escalonada.
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO FROM productos
WHERE PRECIO > (SELECT AVG(PRECIO) FROM productos WHERE SECCIÓN='DEPORTES') AND
SECCIÓN='DEPORTES'

--Consultar los productos que tengan un precio mayor a todos los producto
--de la sección cerámica
SELECT * FROM productos WHERE PRECIO > ALL (SELECT PRECIO FROM productos
WHERE SECCIÓN='CERÁMICA')

--Consultar el nombre de los articulos y su precio que tengan mas de 20
--unidades vendidas
SELECT NOMBREARTÍCULO, PRECIO FROM productos WHERE CÓDIGOARTÍCULO
IN(SELECT CÓDIGOARTÍCULO FROM productospedidos WHERE UNIDADES>20)
