create database ventas; --la base se llama ventas

use ventas;

create table usuarios( --tabla usuaarios
				id_usuario int auto_increment, --el ide es un auto incremento
				nombre varchar(50),
				apellido varchar(50),
				email varchar(50),
				password text(50),
				fechaCaptura date, --la fechaCaptura es para si en el futuro se quiere hacer alguna estadisticas
				primary key(id_usuario)
					);

create table categorias (
				id_categoria int auto_increment,
				id_usuario int not null, --para ver que usuario ha agregado la categoria
				nombreCategoria varchar(150),
				fechaCaptura date,
				primary key(id_categoria)
				);

create table imagenes(--cada producto tiene una imagen por loque se necesitara una tabla
					  --contendra un id_imagen como la ruta, esto nos aydara a relacionar con los productos
					  --
				id_imagen int auto_increment,
				id_categoria int not null,
				nombre varchar(500),
				ruta varchar(500),
				fechaSubida date,
				primary key(id_imagen)
				);
create table articulos(
				id_producto int auto_increment,
				id_categoria int not null,
				id_imagen int not null, --id_imagen para mostrar la imagen de la tabla anterior
				id_usuario int not null, --para tener mayor control
				nombre varchar(50),
				descripcion varchar(500),
				cantidad int,
				precio float,
				fechaCaptura date,
				primary key(id_producto)

				);

create table clientes(
				id_cliente int auto_increment,
				id_usuario int not null,--para saber que usuario ha creado el nuevo cliente
				nombre varchar(200),
				apellido varchar(200),
				direccion varchar(200),
				email varchar(200),
				telefono varchar(200),
				rfc varchar(200),
				primary key(id_cliente)
				);
create table ventas(
				id_venta int not null,
				id_cliente int,
				id_producto int,--quando agas una venta se quitara la cantidad del almacen(articulos,cantidad int)
				id_usuario int,
				precio float,
				fechaCompra date
				);