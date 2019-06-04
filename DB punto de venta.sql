/*el bymp SE IRÁ CAMBIANDO A LAS INICIALES DE CADA UNO DE USTEDES EJEMPLO
JOSE CARLOS AMBRIZ MEDINA JCAM
CRISTIAN AREVALO CA
RECUERDEN QUE LAS TODO TO VA EN MINUSCULAS*/

create database punto_venta_casr;
use punto_venta_casr;

create table tbl_productos (id_producto int primary key auto_increment, codigo_barras int, proveedor_id int,nombre_producto varchar (30), 
categoria_id int, presentacion_id int)engine=MyISAM;

create table tbl_precio (id_precio int primary key auto_increment, producto_id int, 
precio int, fecha_act datetime)engine=MyISAM;

create table tbl_categoria(id_categoria int primary key auto_increment, nombre_categoria varchar (30))engine=MyISAM;

create table tbl_proveedor(id_proveedor int primary key auto_increment, nombre varchar(30),rfc varchar(15), 
direccion varchar(200), telefono varchar (10), correo varchar(15)) engine=MyISAM;

create table tbl_presentacion(id_presentacion int primary key auto_increment, nombre varchar(15), 
cantidad varchar(4))engine=MyISAM;

create table tbl_entradas(id_entrada int primary key auto_increment, id_producto int, 
cantidad int,fecha_adq datetime,obs_lote varchar(200), tipo_pago int)engine=MyISAM;


create table tbl_ventas_temp(id_venta int primary key auto_increment, id_producto int, cantidad int,
fecha_venta datetime, tipo_pago int)engine=MyISAM;

create table tbl_ventas(id_venta int primary key auto_increment, id_producto int, cantidad int, 
fecha_venta datetime, tipo_pago int)engine=MyISAM;



create table tbl_tipo_pago(id_tipo int primary key auto_increment, nombre varchar(15))engine=MyISAM;

create table tbl_factura(id_factura int primary key auto_increment, codigo_timbre int, venta_id int, 
cliente_id int, monto int, fecha datetime)engine=MyISAM;

create table tbl_clientes(id_cliente int primary key auto_increment, rfc varchar(30), 
nombre varchar (30), ap_pat varchar(30), ap_mat varchar(30), edad int, correo varchar (30), 
direccion varchar (200))engine=MyISAM;

create table tbl_log( id_log int primary key auto_increment, id_user int, 
movimiento varchar (30), fecha datetime)engine=MyISAM;

create table tbl_usuario(id_usuario int primary key auto_increment, 
nombre varchar(30), ap_pat varchar (30), ap_mat varchar (30), usuario varchar (30), pass varchar(30),
rol int)engine=MyISAM;

create table tbl_rol(id_rol int primary key auto_increment, nombre varchar(15))engine=MyISAM;

select * from tbl_usuario;
select * from tbl_presentacion;
insert into tbl_proveedor (nombre,rfc,direccion,telefono,correo)
values ('cocacola','2541236547896','cd azteca','5563241014','sasasassdds.com');
select * from tbl_productos;

truncate table tbl_proveedor
insert into tbl_productos (codigo_barras,proveedor_id,nombre_producto,categoria_id,presentacion_id) 
values ('6','1','ambiz','1','1');

insert into tbl_productos (codigo_barras, proveedor_id, nombre_producto, categoria_id, presentacion_id)
values ('2','1','c','1','1')
desc tbl_entradas
select * from tbl_entradas
SELECT * FROM tbl_tipo_pago order by nombre asc
TRUNCATE tbl_entradas													
insert into tbl_rol (nombre) values("Limpieza")

Drop table tbl_entradas
create table tbl_entradas(id_entrada int primary key auto_increment, codigo_barras varchar(12), cantidad int, 
tipo_pago varchar(20))

insert into tbl_entradas (codigo_barras, cantidad, tipo_pago) 
		  values ('$codigo_barras[$a]','$cantidad[$b]','$tipo_pago[$c]');  