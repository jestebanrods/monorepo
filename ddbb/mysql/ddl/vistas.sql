--Una vista es una especie de tabla auxiliar que funciona como
--una tabla real y que permite realizar resumenes de otras tablas, 
--o de tablas que siempre son conultadas, mejorando y liberando al 
--manejador SQL
CREATE VIEW resumen_deportes AS 
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO FROM productos
WHERE SECCIÓN='DEPORTES' ORDER BY PRECIO

--Ejmplo de consulta de dicha vista
SELECT * FROM resumen_deportes WHERE PRECIO>100