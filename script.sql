create database ventas;

use ventas;

create table producto(
    id int auto_increment,
    nombre varchar(100),
    precio int,
    stock int,
    primary key(id)
);
/* Plantilla para insertar mas productos
insert into producto values (null,'1','2','3');
1=Nombre
2=precio
3=Cantidad
*/
insert into producto values (null,'Leche','100','25');
insert into producto values (null,'Cacao','100','65');
insert into producto values (null,'Avellanas','100','52');
insert into producto values (null,'Azucar','120','75');
insert into producto values (null,'Nocila','200','95');
insert into producto values (null,'Turrón','200','96');
insert into producto values (null,'Cereales','150','12');
insert into producto values (null,'Sal','75','10');
insert into producto values (null,'Agua','100','95');
insert into producto values (null,'Oregano','100','15');


create table venta(
    id int auto_increment,
    fecha datatime,
    total int,
    primary key(id)
);
/*Como una venta puede tener muchos
productos y un producto puede tener
muchas ventas se tiene que crear 
una tabla intermedia (detalle)*/

create table detalle(
    id int auto_increment,
    venta int,
    producto int,
    cantidad int,
    subTotal int,
    primary key(id)
);


/*Para ver las tablas*/

select * from producto;
select * from venta;
select * from detalle;