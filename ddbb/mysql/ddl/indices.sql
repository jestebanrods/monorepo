--Agregar llave primaria en la creación de la tabla
CREATE TABLE ejemplo (
	cedula INT,
	nombre VARCHAR(20),
	apellido VARCHAR(20),
	edad TINYINT,
	PRIMARY KEY (cedula)
)

--Agregar llave primaria multiple en la creación de la tabla
CREATE TABLE ejemplo (
	cedula INT,
	nombre VARCHAR(20),
	apellido VARCHAR(20),
	edad TINYINT,
	PRIMARY KEY (nombre, apellido)
)

--Asignar indice ordinario
CREATE INDEX indice ON ejemplo(apellido)

--Asignar indice único
CREATE UNIQUE index unico ON ejemplo(apellido)

--Asignar indice compuestos (únicos multiples)
CREATE UNIQUE index multiple ON ejemplo(nombre, apellido)

--Asignar una llave primaria
ALTER TABLE ejemplo ADD PRIMARY KEY (cedula)

--Borrar asignación de indices
DROP INDEX indice, unico, multiple ON ejemplo

--Borar llave primária
ALTER TABLE ejemplo DROP PRIMARY KEY