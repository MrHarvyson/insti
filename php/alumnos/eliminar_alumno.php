<?php

include("../conexion.php");

$id = $_GET['id'];
$eliminar = "delete from alumnos where id ='$id'";
$resultadoEliminar = mysqli_query($conex,$eliminar);

header("Location: alumnos.php");