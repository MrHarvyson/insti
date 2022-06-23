<?php

include('../conexion.php');


$id = trim($_POST['id']);
$nombre = trim($_POST['nombre']);
$telefono = trim($_POST['telefono']);
$correo =  trim($_POST['correo']);
$tipo = trim($_POST['tipo']);
$comentario = trim($_POST['comentario']);

$modificar = "update contactos set nombre = '$nombre', telefono = '$telefono', correo = '$correo', tipo = '$tipo', comentario = '$comentario' where id = '$id'";

$resultador = mysqli_query($conex,$modificar);

if ($resultador){
    echo '
                <script>
                    alert("correcto");
                    window.location = "contactar.php";
                </script>
            ';
}else{
    echo '
                <script>
                    alert("incorrecto");
                    window.location = "contactar.php";
                </script>
            ';
}
