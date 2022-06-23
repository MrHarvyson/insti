<?php

include("../conexion.php");


if (isset($_POST['guardar'])){

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1){
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);

        $consulta = "select * from profesores where nombre = '$nombre'";
        $resultado = mysqli_query($conex,$consulta);

        if (mysqli_num_rows($resultado) > 0){
            echo '
                <script>
                    alert("Profesor ya registrado");
                    window.location = "profesores.php";
                </script>
            ';
            exit();
        }else{
            $insertar = "insert into profesores (nombre,apellidos,telefono) values ('$nombre','$apellido','$telefono')";
            $resultado = mysqli_query($conex,$insertar);
            echo '
                <script>
                    alert("Profesor registrado correctamente");
                    window.location = "profesores.php";
                </script>
            ';
            exit();
        }
    }
}