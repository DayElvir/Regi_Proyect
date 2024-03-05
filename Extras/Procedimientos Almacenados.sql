/* Ver Usuarios*/
delimiter $$
create procedure VerUsuario ()
begin 
select*from usuarios;
end$$
/*Nuevo Usuario*/
delimiter $$
Create procedure NuevoUsuario(
in idrol bigint,
in idestado bigint,
in nombre_usuario varchar (30),
in contra_usuario varchar (20),
in correo_usuario varchar (30),
in tele_usuario varchar (30),
in direccion_usuario varchar (30),
in apellido_usuario varchar (30),
in identidad_usuario varchar (20),
in apodo_usuario varchar (20),
in token varchar (120) ,
in intento_fallidos int (20),
in fecha_ingreso datetime
)
begin 
INSERT INTO usuarios (idrol, idestado, nombre_usuario, contra_usuario, 
correo_usuario, tele_usuario, direccion_usuario, apellido_usuario,identidad_usuario,
 apodo_usuario, token, intento_fallidos,fecha_ingreso)
values (idrol, idestado, nombre_usuario, contra_usuario, 
correo_usuario, tele_usuario, direccion_usuario, apellido_usuario,identidad_usuario,
 apodo_usuario, token, intento_fallidos,fecha_ingreso);
 end$$
 
/*Eliminar Usuarios*/
delimiter $$ 
create procedure EliminarUsuario( in id bigint)
begin 
delete from usuarios where id= idusuario;
end$$

/*Actualizar Usuario*/
delimiter $$
Create procedure ActualizarUsuarios(
in id bigint,
in idrol bigint,
in idestado bigint,
in nombre_usuario varchar (30),
in contra_usuario varchar (20),
in correo_usuario varchar (30),
in tele_usuario varchar (30),
in direccion_usuario varchar (30),
in apellido_usuario varchar (30),
in identidad_usuario varchar (20),
in apodo_usuario varchar (20),
in token varchar (120) ,
in intento_fallidos int (20)
)
begin 
UPDATE usuarios SET idrol=idrol, idestado=idestado, nombre_usuario=nombre_usuario, contra_usuario=contra_usuario, 
correo_usuario=correo_usuario, tele_usuario=tele_usuario, direccion_usuario=direccion_usuario, apellido_usuario=apellido_usuario,identidad_usuario=identidad_usuario,
 apodo_usuario=apodo_usuario, token=token, intento_fallidos=intento_fallidos WHERE id=idusuario;
end$$


















