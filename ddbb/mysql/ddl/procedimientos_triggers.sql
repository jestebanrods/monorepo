--Se puede crear un trigger que contenga un procedimiento
--o función y que a partir de allí realice una acción ante el 
--evento que lo dispara
DELIMITER $$
	CREATE TRIGGER revisa_precio UPDATE ON productos FOR EACH ROW
	BEGIN
		IF(NEW.PRECIO<0) THEN 
			SET NEW.PRECIO=OLD.PRECIO;
		ELSEIF(NEW.PRECIO>1000) THEN 
			SET NEW.PRECIO=OLD.PRECIO;
		END IF;
	END;$$
DELIMITER ;