--Modificar el precio de todos los prodcutos de la sección de deportes en 10
UPDATE productos SET PRECIO=PRECIO+10 WHERE SECCIÓN='DEPORTES'

--Modificar el nombre de una sección en este caso, cambiar de "Deportes" a "Deportivo"
UPDATE productos SET SECCIÓN='DEPORTIVO' WHERE SECCIÓN='DEPORTES'