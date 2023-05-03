use prueba;

alter table people add email varchar(255); -- para agregar una nueva columna en la tabla
alter table people add age int;

-- para agregar validacion en la base de datos

alter table people add check (age>=18);

drop table users;
