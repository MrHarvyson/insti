<?php

include("../conexion.php");

$id = $_GET['id'];
$eliminar = "delete from profesores where id ='$id'";
$resultadoEliminar = mysqli_query($conex,$eliminar);

header("Location: profesores.php");