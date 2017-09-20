--Agregar un campo a una tabla ya creada
ALTER TABLE prueba ADD COLUMN poblacion DATE

--Borrar un campos de una tabla
ALTER TABLE prueba DROP COLUMN poblacion

--Modificar el tipo de dato de un campo
ALTER TABLE prueba MODIFY poblacion VARCHAR(20)

--Modificar el valor por defecto de un campo
ALTER TABLE prueba ALTER COLUMN edad SET DEFAULT 20

--Eliminar el valor po defecto de un campo
ALTER TABLE prueba ALTER COLUMN edad DROP DEFAULT