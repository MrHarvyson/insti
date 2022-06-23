<?php

include("../conexion.php");

$id = $_GET['id'];
$editar = "select from alumnos where id ='$id'";
$resultadoEditar = mysqli_query($conex,$editar);

header("Location: page_editar_alumno.php");