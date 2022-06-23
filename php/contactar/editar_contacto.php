<?php

include("../conexion.php");

$id = $_GET['id'];
$editar = "select from contactos where id ='$id'";
$resultadoEditar = mysqli_query($conex,$editar);

header("Location: page_editar_contacto.php");