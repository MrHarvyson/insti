<?php

include "../conexion.php";


if (isset($_POST['guardar'])){

    if (strlen($_POST['nombre']) >= 1 ){
        $nombre = trim($_POST['nombre']);
        $curso = trim($_POST['curso']);
        $asignatura = trim($_POST['asignatura']);
        $hora = trim($_POST['hora']);
        $dia = trim($_POST['dia']);
        $id_profesores = trim($_POST['profesores']);

        $consulta = "select * from grupos where nombre = '$nombre'";
        $resultado1 = mysqli_query($conex,$consulta);

        if (mysqli_num_rows($resultado1) > 0){
            echo '
                <script>
                    alert("Grupo ya registrado");
                    window.location = "grupos.php";
                </script>
            ';
            exit();
        }else{
            $insertar = "insert into grupos (nombre,curso,asignatura,hora,dia,id_profesores) values ('$nombre','$curso','$asignatura','$hora','$dia','$id_profesores')";
            $resultado = mysqli_query($conex,$insertar);
            echo '
                <script>
                    alert("Usuario registrado correctamente");
                    window.location = "grupos.php";
                </script>
            ';
            exit();
        }
    }
}
mysqli_close($conex);
