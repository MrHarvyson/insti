<?php

include ("conexion.php");

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar = mysqli_query($conex, "select * from usuarios where nombre = '$usuario' and contrasena = '$contrasena'");

if (mysqli_num_rows($validar) > 0){
    header ("location:sesion.php");
    exit();
}else{
    echo '
        <script>
            alert("Usuario no existente");
            window.location = "acceder.php";
        </script>
    ';
    exit();
}
