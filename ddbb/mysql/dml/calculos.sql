--Realizar una operación a un campo y registrarlo en un campo nuevo, en este
--caso es obtener el iva de los productos, redondear el calculo con dos
--decimales luego de la coma
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, ROUND(PRECIO*1.19, 2) AS PRECIO_IVA
FROM productos

--Determinar la diferencia entre la fecha actual y la fecha del producto, esto
--se hace mediante la función DATEDIFF pasandole como parametro las dos fechas
--o rango de fechas. La función NOW como su nombre lo indica, devuelve el valor
--de la fecha actual. La funciòn DATE_FORMAT da formato a la fecha.
SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, FECHA, DATE_FORMAT(NOW(), '%Y-%M-%D')
AS DÍA_ACTUAL, DATEDIFF(NOW(), FECHA) AS DIFERENCIA_DÍAS FROM productos