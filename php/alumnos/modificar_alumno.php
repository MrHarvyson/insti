<?php

include('../conexion.php');


$id = trim($_POST['id']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$telefono = trim($_POST['telefono']);


$modificar = "update alumnos set nombre = '$nombre', apellido = '$apellido' , telefono = '$telefono' where id = '$id'";

$resultador = mysqli_query($conex,$modificar);

if ($resultador){
    echo '
                <script>
                    alert("correcto");
                    window.location = "alumnos.php";
                </script>
            ';
}else{
    echo '
                <script>
                    alert("incorrecto");
                    window.location = "alumnos.php";
                </script>
            ';
}
