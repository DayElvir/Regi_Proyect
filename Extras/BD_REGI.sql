Create database BD_REGI;
USE BD_REGI;

create table usuarios(
idusuario bigint primary key auto_increment,
idrol bigint,
idestado bigint,
nombre_usuario varchar (30) not null,
contra_usuario varchar (20) not null,
correo_usuario varchar (30) not null,
tele_usuario varchar (30) not null,
direccion_usuario varchar (30) not null,
apellido_usuario varchar (30) not null,
identidad_usuario varchar (20) not null,
apodo_usuario varchar (20) not null,
token varchar (120) not null ,
intento_fallidos int (20),
foreign key (idrol) references roles (idrol) on delete cascade,
foreign key (idestado) references estados (idestado) on delete cascade
)engine=InnoDB
character set utf8
collate utf8_unicode_ci; 

create table roles (
idrol bigint primary key auto_increment,
nombre_rol varchar (30) ,
desc_rol varchar (50) ,
fecha_rol date ,
Habilitar_desahabilitar set ('enable', 'disable')
)engine=InnoDB
character set utf8
collate utf8_unicode_ci;

create table modulos (
idmodulo bigint primary key auto_increment,
nombre_modulos varchar(30) not null,
descmodulo varchar (30) not null,
fecha_modulo date not null,
Habilitar_desahabilitar set ('enable', 'disable') 
)engine=InnoDB
character set utf8
collate utf8_unicode_ci;

create table estados (
idestado bigint  (20) primary key auto_increment,
activo int (10) not null,
inactivo int(10) not null,
nuevo int (10) not null,
bloqueo int (10) not null
)engine=InnoDB
character set utf8
collate utf8_unicode_ci;

Create table paramentros(
idparamentros bigint (20) not null
)engine=InnoDB
character set utf8
collate utf8_unicode_ci;

Create table permisos (
idpermiso bigint(20) not null,
idrol  bigint ,
permiso_insertar int (20) not null,
permiso_eliminar int (20) not null,
permiso_actualizar int (20) not null,
foreign key (idrol) references Roles (idrol) on delete cascade
)engine=InnoDB
character set utf8
collate utf8_unicode_ci;

/*Servicios */

Create table Servicios(
idservicio bigint primary key auto_increment,
nombre_servicio varchar (30) not null,
desc_servicio varchar (255) not null,
cost_servicio numeric not null,
fech_inicio date not null,
fech_final date not null,
actualizado_por varchar (30)
)engine=InnoDB character set utf8 collate utf8_unicode_ci;



create table pagos(
idpago bigint primary key auto_increment,
idusuario bigint,
idservicio bigint,
fecha_pago date not null,
no_registro_banco varchar (20) not null,
comprobante VARCHAR(255) not null,
monto int(20) not null,
cuenta_depositar int(20) not null,
foreign key (idusuario) references Usuarios (idusuario) on delete cascade,
foreign key (idservicio) references servicios (idservicio) on delete cascade
)engine=InnoDB character set utf8 collate utf8_unicode_ci;




create table estadoscuenta(
idestado bigint primary key auto_increment,
idpago bigint,
desc_estado varchar (30),
foreign key (idpago) references pagos (idpago) on delete cascade
)engine=InnoDB character set utf8 collate utf8_unicode_ci;


create table historial_pago(
idhistorial bigint primary key auto_increment,
idpago bigint,
idestado bigint,
foreign key (idpago) references pagos (idpago) on delete cascade,
foreign key (idestado) references estadoscuenta(idestado) on delete cascade
)engine=InnoDB character set utf8 collate utf8_unicode_ci;


/* Notificaciones */

create table tipo_notificacion (
idtipo bigint primary key auto_increment,
des_not varchar (30)
)engine=InnoDB character set utf8 collate utf8_unicode_ci;

create table notificacion (
idnotificacion bigint primary key auto_increment,
idtipo bigint,
idusuario bigint,
idpago bigint,
idservicio bigint,
usuarioR varchar (30),
usuarioE varchar (30),
estado boolean,
fecha date ,
foreign key (idpago) references pagos (idpago) on delete cascade,
foreign key (idtipo) references tipo_notificacion (idtipo) on delete cascade
)engine=InnoDB character set utf8 collate utf8_unicode_ci;


/*publicaciones */
create table publicaciones (
idpublicacion bigint primary key auto_increment,
idusuario bigint,
tit_publicacion varchar (50),
desc_publicacion varchar (100),
fec_publicacion date,
foreign key (idusuario) references usuarios (idusuario) on delete cascade
)engine=InnoDB character set utf8 collate utf8_unicode_ci;

