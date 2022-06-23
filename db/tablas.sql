use bd_insti;

create table alumnos(
    id int auto_increment primary key,
    nombre varchar(35) not null,
    apellido varchar(35) not null,
    telefono int,
    nombre_grupos varchar(25),
    foreign key (nombre_grupos) references grupos (nombre) on delete set null on update cascade
);

create table grupos(
    nombre varchar(25) primary key not null ,
    curso varchar(25) not null,
    asignatura varchar(25) not null,
    hora time not null ,
    dia varchar(25) not null,
    id_profesores int,
    foreign key (id_profesores) references profesores (id) on delete set null on update cascade
);

create table profesores(
    id int auto_increment primary key,
    nombre varchar(25) not null ,
    apellidos varchar(25) not null ,
    telefono int
)
