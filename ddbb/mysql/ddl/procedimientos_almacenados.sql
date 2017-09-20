--Un procecimiento almacenado es una especie de función, almacenada
--en la bbdd, que permite ser ejecutada evitando el manejo de SQL 
--al usuario final o desarrolador de la aplicación del cliente,
--ademas de dar mayor eficiencia y seguridad de la bbdd
CREATE PROCEDURE muestra_cliente()
	SELECT * FROM clientes WHERE POBLACIÓN='MADRID'

CREATE PROCEDURE actualiza_productos(nPrecio INT, codigo VARCHAR(4))
	UPDATE productos SET PRECIO=nPrecio WHERE CÓDIGOARTÍCULO=codigo

--Forma de llamar al procedimiento en MySQL
CALL muestra_cliente()
CALL actualiza_productos(20, 'AR41')

--Cuando el procedimiento tiene mas de una linea, se procede a 
--crear un delimitador, para que el interprete SQL separa en donde
--comienza y en odnde terminar la función
DELIMITER $$
CREATE PROCEDURE calcular_edad(agno_nacimiento int)
BEGIN
	DECLARE agno_actual INT DEFAULT 2017;
	DECLARE edad INT;
	SET edad=agno_actual-agno_nacimiento;
	SELECT edad;
END;$$
DELIMITER ;

--Ejemplificación de la misma función pero en leguaje C
int calcular_edad(int agno_nacimiento) {
	int agno_actual=2017;
	int edad;
	edad=agno_actual-agno_nacimiento;
	return edad;
}