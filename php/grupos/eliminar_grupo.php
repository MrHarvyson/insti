<?php

include("../conexion.php");

$id = $_GET['nombre'];
$eliminar = "delete from grupos where nombre ='$id'";
$resultadoEliminar = mysqli_query($conex,$eliminar);

header("Location: grupos.php");