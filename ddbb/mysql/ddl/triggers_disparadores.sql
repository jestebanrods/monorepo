--Trigger Inseción. Crear un disparador de eventos el cual recolecte la información de 
--un nuevo registro en la tabla productos y los inserte en la tabla
--registro_prodcutos con su hora de inseción

--Por convención el nombre del trigger está dado por
--Tabla que está a la escucha (productos)
--tipo de trigger (a, after)
--tipo de acción (i, insert)
CREATE TRIGGER productos_ai AFTER INSERT ON productos FOR EACH ROW
INSERT INTO registro_productos(CÓDIGOARTÍCULO, NOMBREARTÍCULO, PRECIO, INSERTADO)
VALUES (NEW.CÓDIGOARTÍCULO, NEW.NOMBREARTÍCULO, NEW.PRECIO, NOW())

--Trigger Actualización. Crear un ddisparador de eventos que recolecte el valor del
--precio de un articulo antes y despues de la modificación esto 
--en una tabla de respaldo, tambien debe informar quien realizo l
--a actualización y la hora de esta
CREATE TRIGGER productos_bu BEFORE UPDATE ON productos FOR EACH ROW
INSERT INTO respaldo (CÓDIGOARTÍCULO, NOMBREARTÍCULO, PRECIOANTIGUO, 
PRECIONUEVO, USUARIO, FECHAMODIFICACIÓN) VALUES (NEW.CÓDIGOARTÍCULO, 
NEW.NOMBREARTÍCULO, OLD.PRECIO, NEW.PRECIO, CURRENT_USER(), NOW())

--Trigger Eliminación. Crear tabla que identifique los articulos borrados
--y el usuario que borro dichos registros y la hora de la acción
CREATE TRIGGER productos_ad AFTER DELETE ON productos FOR EACH ROW
INSERT INTO registro_eliminados (CÓDIGOARTÍCULO, NOMBREARTÍCULO, USUARIO,
FECHAELIMINADO) VALUES (OLD.CÓDIGOARTÍCULO, OLD.NOMBREARTÍCULO, 
CURRENT_USER(), NOW())

--Se usa la acción FOR EACH ROW, ya que se quiere que el trigger dispare
--el evento cada vez que se inserte un registro en la tabla, ya que
--en una misma consulta pueden insertar multiples registros, en caso de 
--que se quiera que el evento se ejecute solo con la consulta, independientemente
--del numero de registros insertados se usa FOR EACH ...

--Para modificar un trigger hay que borrarlo y volverlo a crear con las
--modificaciones realizadas ó directamente mediante la interfaz grafica del gestor
--de bbdd usado