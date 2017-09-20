--Crear una nueva tabla a partir del resultado de la busqueda de todos los
--clientes cuya población se "Madrid"
CREATE TABLE clientes_madrid SELECT * FROM clientes WHERE POBLACIÓN='MADRID'