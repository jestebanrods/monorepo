--Consultar y unir los articulos de las tablas productos y productosnuevos, cuya
--sección corresponda a cualquier tipo de deportes y unirlos en una sola tabla
SELECT * FROM productos WHERE SECCIÓN='DEPORTES' UNION
SELECT * FROM productosnuevos WHERE SECCIÓN='DEPORTES DE RIESGO'

--La diferencias entre UNION y UNION ALL, es que UNION no repite registros,
--es decir, si hay 2 o mas articulos registro solo coloca uno solo, en cambio
--UNION ALL los extrae las veces que sea necesario
