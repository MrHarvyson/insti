<?php

include("conexion.php");


if (isset($_POST['enviar'])){

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >=1){
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $tipo = trim($_POST['tipo']);
        $comentario = trim($_POST['comentario']);

        $consulta = "select * from contactos where nombre = '$nombre'";
        $resultado2 = mysqli_query($conex,$consulta);

        if (mysqli_num_rows($resultado2) > 0){
            echo '
                <script>
                    alert("Usuario ya registrado");
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }else{
            $insertar = "insert into contactos (nombre,telefono,correo,tipo,comentario) values ('$nombre','$telefono','$correo','$tipo','$comentario')";
            $resultado = mysqli_query($conex,$insertar);
            echo '
                <script>
                    alert("Usuario registrado correctamente");
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }
    }
}
mysqli_close($conex);
