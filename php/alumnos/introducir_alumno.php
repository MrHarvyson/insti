<?php

include("../conexion.php");


if (isset($_POST['guardar'])){

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1){
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);
        $grupo = trim($_POST['grupo']);

        $consulta = "select * from alumnos where nombre = '$nombre'";
        $resultado = mysqli_query($conex,$consulta);

        if (mysqli_num_rows($resultado) > 0){
            echo '
                <script>
                    alert("Usuario ya registrado");
                    window.location = "alumnos.php";
                </script>
            ';
            exit();
        }else{
            $insertar = "insert into alumnos (nombre,apellido,telefono,nombre_grupos) values ('$nombre','$apellido','$telefono','$grupo')";
            $resultado = mysqli_query($conex,$insertar);
            echo '
                <script>
                    alert("Usuario registrado correctamente");
                    window.location = "alumnos.php";
                </script>
            ';
            exit();
        }
    }
}
mysqli_close($conex);
