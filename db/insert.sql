use bd_insti;

insert into alumnos (nombre, apellido, telefono,nombre_grupos) VALUES ('jose','moreno','954561931','grupo1');
insert into alumnos (nombre, apellido, telefono,nombre_grupos) VALUES ('antonio','vazquez','954451931','grupo3');

insert into profesores (nombre, apellidos, telefono) VALUES ('marga','cabezas','954210078');
insert into profesores (nombre, apellidos, telefono) VALUES ('luis','muñoz','954245378');

insert into grupos (nombre, curso, asignatura, hora, dia, id_profesores) VALUES ('grupo1','1ESO','lengua','12:00','martes','1');
insert into grupos (nombre, curso, asignatura, hora, dia, id_profesores) VALUES ('grupo2','1ESO','mates','13:00','jueves','2');
insert into grupos (nombre, curso, asignatura, hora, dia, id_profesores) VALUES ('grupo4','2ESO','lengua','08:00','lunes','1');
insert into grupos (nombre, curso, asignatura, hora, dia, id_profesores) VALUES ('grupo5','2ESO','lengua','09:00','miercoles','1');
insert into grupos (nombre, curso, asignatura, hora, dia, id_profesores) VALUES ('grupo6','2ESO','lengua','08:00','viernes','1');

insert into grupos (nombre, curso, asignatura, hora, dia, id_profesores) VALUES ('grupo7','4ESO','matematicas','08:00','viernes','1');