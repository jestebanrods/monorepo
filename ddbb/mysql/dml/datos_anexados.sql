--Insertar datos de la tabla clientes_madrid a la tabla
--clientes
INSERT INTO clientes SELECT * FROM clientes_madrid

--Insertar algunos campos de la tabla clientes_madrid en la 
--tabla clientes
INSERT INTO clientes (CÓDIGOCLIENTE, EMPRESA, POBLACIÓN)
SELECT CÓDIGOCLIENTE, EMPRESA, POBLACIÓN FROM clientes_madrid