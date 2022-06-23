use bd_insti;

select *
from grupos
where asignatura like 'lengua' and curso like '1ESO';

select nombre
from alumnos
where nombre_grupos = (select nombre from grupos where asignatura like 'lengua' and nombre = alumnos.nombre_grupos);

select asignatura
from grupos
group by asignatura;

select nombre
from profesores ;
where id = (select id_profesores from grupos order by id_profesores) ;

