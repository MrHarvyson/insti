<?php

include("../conexion.php");

$id = $_GET['id'];
$eliminar = "delete from contactos where id ='$id'";
$resultadoEliminar = mysqli_query($conex,$eliminar);

header("Location: sesion.php");