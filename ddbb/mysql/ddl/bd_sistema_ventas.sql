CREATE DATABASE db_sistema_ventas;
USE db_sistema_ventas;

CREATE TABLE categoria (
	id_categoria INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	descripcion VARCHAR(255),
	condicion BOOLEAN NOT NULL,
	PRIMARY KEY (id_categoria)
);

CREATE TABLE articulo (
	id_articulo INT NOT NULL AUTO_INCREMENT,
  	id_categoria INT NOT NULL,
  	codigo VARCHAR(50) NULL,
  	nombre VARCHAR(100) NOT NULL,
  	stock INT NOT NULL,
  	descripcion VARCHAR(512) NULL,
  	imagen VARCHAR(50) NULL,
  	estado VARCHAR(20) NOT NULL,
  	PRIMARY KEY (id_articulo),
  	CONSTRAINT fk_articulo_categoria
  		FOREIGN KEY (id_categoria)
  		REFERENCES db_sistema_ventas.categoria (id_categoria)
  		ON DELETE NO ACTION
  		ON UPDATE NO ACTION
);

CREATE TABLE persona (
	id_persona INT NOT NULL AUTO_INCREMENT,
	tipo_persona VARCHAR(25) NOT NULL,
	nombre VARCHAR(80) NOT NULL,
	tipo_documento VARCHAR(50) NOT NULL,
	num_documento INT NOT NULL,
	direccion VARCHAR(80) NOT NULL,
	telefono INT NOT NULL,
	PRIMARY KEY (id_persona)
);

CREATE TABLE ingreso (
	id_ingreso INT NOT NULL AUTO_INCREMENT,
	id_proveedor INT NOT NULL,
	tipo_comprobante VARCHAR(20) NOT NULL,
	serie_comprobante VARCHAR(20) NOT NULL,
	num_comprobante INT NOT NULL,
	fecha_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	impuesto DECIMAL(4,2) NOT NULL,
	estado VARCHAR(20) NOT NULL,
	PRIMARY KEY (id_ingreso),
	CONSTRAINT fk_ingreso_persona
		FOREIGN KEY (id_proveedor)
		REFERENCES db_sistema_ventas.persona (id_persona)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
);

CREATE TABLE detalle_ingreso (
	id_detalle_ingreso INT NOT NULL AUTO_INCREMENT,
	id_ingreso INT NOT NULL,
	id_articulo INT NOT NULL,
	cantidad INT NOT NULL,
	precio_compra DECIMAL(11,2) NOT NULL,
	precio_venta DECIMAL(11,2) NOT NULL,
	PRIMARY KEY (id_detalle_ingreso),
	CONSTRAINT fk_det_ingreso_ingreso
		FOREIGN KEY (id_ingreso)
		REFERENCES db_sistema_ventas.ingreso (id_ingreso)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT fk_det_ingreso_articulo
		FOREIGN KEY (id_articulo)
		REFERENCES db_sistema_ventas.articulo (id_articulo)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
);

CREATE TABLE venta (
	id_venta INT NOT NULL AUTO_INCREMENT,
	id_cliente INT NOT NULL,
	tipo_comprobante VARCHAR(20) NOT NULL,
	serie_comprobante VARCHAR(7) NOT NULL,
	num_comprobante INT NOT NULL,
	fecha_hora DATETIME DEFAULT CURRENT_TIMESTAMP,
	impuesto DECIMAL(4,2) NOT NULL,
	total_venta DECIMAL(11,2) NOT NULL,
	estado VARCHAR(20) NOT NULL,
	PRIMARY KEY (id_venta),
	CONSTRAINT fk_venta_cliente
		FOREIGN KEY (id_cliente)
		REFERENCES db_sistema_ventas.persona (id_persona)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
);

CREATE TABLE detalle_venta (
	id_detalle_venta INT NOT NULL AUTO_INCREMENT,
	id_venta INT NOT NULL,
	id_articulo INT NOT NULL,
	cantidad INT NOT NULL,
	precio_venta DECIMAL(11,2) NOT NULL,
	descuento DECIMAL(11,2) NOT NULL,
	PRIMARY KEY (id_detalle_venta),
	CONSTRAINT fk_det_venta_venta
		FOREIGN KEY (id_venta)
		REFERENCES db_sistema_ventas.venta (id_venta)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT fk_det_venta_articulo
		FOREIGN KEY (id_articulo)
		REFERENCES db_sistema_ventas.articulo (id_articulo)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
);