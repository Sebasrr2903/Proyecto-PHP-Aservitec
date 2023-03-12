/*Creación de la Base de Datos*/
CREATE DATABASE AserviTecDB;

USE AserviTecDB;

/* CREACIÓN DE TABLAS*/

CREATE TABLE Roles (
    Rol_ID INT NOT NULL auto_increment,
	Nombre VARCHAR(60),
    PRIMARY KEY (Rol_ID)
);

CREATE TABLE Usuarios (
    Usuario_ID INT NOT NULL auto_increment,
    correo VARCHAR(100) NOT NULL,
    Contrasena VARCHAR(100) NOT NULL,
	Rol_ID INT NOT NULL,
    PRIMARY KEY (Usuario_ID),
    CONSTRAINT FK_Rol FOREIGN KEY (Rol_ID)
    REFERENCES Roles(Rol_ID)
);

CREATE TABLE Tipo_Identificacion (
    Tipo_Identificacion_ID INT NOT NULL auto_increment,
	Tipo VARCHAR(60),
    PRIMARY KEY (Tipo_Identificacion_ID)
);

CREATE TABLE Provincias (
    Provincia_ID INT NOT NULL auto_increment,
	Nombre VARCHAR(60),
    PRIMARY KEY (Provincia_ID)
);

CREATE TABLE Cantones (
    Canton_ID INT NOT NULL auto_increment,
	Nombre VARCHAR(60),
	Provincia_ID INT NOT NULL,
    PRIMARY KEY (Canton_ID),
	CONSTRAINT FK_Provincia FOREIGN KEY (Provincia_ID)
    REFERENCES Provincias(Provincia_ID)
);

CREATE TABLE Distritos (
    Distrito_ID INT NOT NULL auto_increment,
	Nombre VARCHAR(60),
    Canton_ID INT NOT NULL,
    PRIMARY KEY (Distrito_ID),
	CONSTRAINT FK_Canton FOREIGN KEY (Canton_ID)
    REFERENCES Cantones(Canton_ID)
);



CREATE TABLE Clientes (
    Identificacion VARCHAR(15) NOT NULL,
    Tipo_Identificacion_ID INT NOT NULL,
    Nombre VARCHAR(100) NOT NULL,
    Correo VARCHAR(20) NOT NULL,
    Telefono VARCHAR(15) NOT NULL,
    Provincia_ID INT NOT NULL,
	Canton_ID INT NOT NULL,
    Distrito_ID INT NOT NULL,
    Direccion_Exacta VARCHAR(250) NOT NULL,
    PRIMARY KEY (Identificacion),
    CONSTRAINT FK_TipoIdentificacion FOREIGN KEY (Tipo_Identificacion_ID)
    REFERENCES Tipo_Identificacion(Tipo_Identificacion_ID),
	CONSTRAINT FK_Provincia FOREIGN KEY (Provincia_ID)
    REFERENCES ProvinciaS(Provincia_ID),
	CONSTRAINT FK_Canton FOREIGN KEY (Canton_ID)
    REFERENCES Cantones(Canton_ID),
	CONSTRAINT FK_Distrito FOREIGN KEY (Distrito_ID)
    REFERENCES Distritos(Distrito_ID)
);

CREATE TABLE Productos (
    Producto_ID INT NOT NULL auto_increment,
    Nombre VARCHAR(100) NOT NULL,
    Descripcion VARCHAR(250) NOT NULL,
    Precio double NOT NULL,
    IVA INT NOT NULL,
    PRIMARY KEY (Producto_ID)
);

CREATE TABLE Carrito (
    Carro_ID INT NOT NULL auto_increment,
    Cliente_ID  VARCHAR(15) NOT NULL,
    Subtotal double NOT NULL,
    Total double NOT NULL,
    PRIMARY KEY (Carro_ID),
	CONSTRAINT FK_CarritoCliente FOREIGN KEY (Cliente_ID)
    REFERENCES Clientes(Identificacion)
);

CREATE TABLE Productos_Carrito (
    Productos_Carrito_ID INT NOT NULL auto_increment,
    Carro_ID INT NOT NULL,
    Producto_ID INT NOT NULL,
    Cantidad INT NOT NULL,
    PRIMARY KEY (Productos_Carrito_ID),
	CONSTRAINT FK_ProductoCarrito FOREIGN KEY (Producto_ID)
    REFERENCES Productos(Producto_ID),
	CONSTRAINT FK_CarritoProducto FOREIGN KEY (Carro_ID)
    REFERENCES Carrito(Carro_ID)
);

CREATE TABLE Atenciones (
    Atencion_ID INT NOT NULL auto_increment,
    Cliente_ID VARCHAR(15) NOT NULL,
    Descripion VARCHAR(250) NOT NULL,
    Fecha_Creacion datetime NOT NULL DEFAULT NOW(),
	Usuario_ID INT NOT NULL,
    Fecha_Atencion datetime,
    Fecha_Resolucion datetime,
    Archivos blob,
    PRIMARY KEY (Atencion_ID),
	CONSTRAINT FK_ClientesAtencion FOREIGN KEY (Cliente_ID)
    REFERENCES Clientes(Cliente_ID),
	CONSTRAINT FK_usuarioAtencion FOREIGN KEY (Usuario_ID)
    REFERENCES Usuarios(Usuario_ID)
);

CREATE TABLE Comentario_Atenciones (
    Comentario_Atenciones_ID INT NOT NULL auto_increment,
	Atencion_ID INT NOT NULL,
	Usuario_ID INT NOT NULL,
    Comentario VARCHAR(250),
    Fecha_Creacion datetime NOT NULL DEFAULT NOW(),
    Archivos blob,
    PRIMARY KEY (Comentario_Atenciones_ID),
	CONSTRAINT FK_ComentarioAtencion FOREIGN KEY (Atencion_ID)
    REFERENCES Atenciones(Atencion_ID),
	CONSTRAINT FK_usuarioComentarioAtencion FOREIGN KEY (Usuario_ID)
    REFERENCES Usuarios(Usuario_ID)
);


CREATE TABLE Tipo_Proforma (
    Tipo_Proforma_ID INT NOT NULL auto_increment,
	Nombre VARCHAR(60),
    PRIMARY KEY (Tipo_Proforma_ID)
);


CREATE TABLE Solicitudes_Proformas (
    Solicitudes_Proformas_ID INT NOT NULL auto_increment,
	Cliente_ID  VARCHAR(15) NOT NULL,
    Tipo_Proforma_ID INT NOT NULL,
    Comentario VARCHAR(250),
    Fecha_Creacion datetime NOT NULL DEFAULT NOW(),
    PRIMARY KEY (Solicitudes_Proformas_ID),
	CONSTRAINT FK_ClienteSolucitud FOREIGN KEY (Cliente_ID)
    REFERENCES Clientes(Cliente_ID),
	CONSTRAINT FK_Tipo_Proforma FOREIGN KEY (Tipo_Proforma_ID)
    REFERENCES Tipo_Proforma(Tipo_Proforma_ID)
);


/* CREACION DE USUARIO DB*/

CREATE USER 'admin' IDENTIFIED BY '123456';
GRANT ALL  ON AserviTecDB.* To 'admin' ;
FLUSH PRIVILEGES;