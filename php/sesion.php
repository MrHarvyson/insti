<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="preload" href="../css/cabecera.css" as="style">
    <link rel="preload" href="../css/sesioncss.css" as="style">

    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/cabecera.css" rel="stylesheet">
    <link href="../css/sesioncss.css" rel="stylesheet">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Prompt:wght@100&display=swap" rel="stylesheet">
    <title>ITP Formación Profesinal Informática</title>
    <link rel="short icon" href="../imagenes/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../javascript/main.js"></script>
</head>

<body>

<!--BARRA SUPERIOR-->

<?php
include ("cabecera_ini_sesion.php")
?>

<main>

    <!--CAJA BLANCA-->

    <div class="cajablanca">
    </div>

    <div class="wrap">

        <div class="submenu">

            <a href="horarios/horarios.php">HORARIO</a>
            <a href="profesores/profesores.php">PROFESORES</a>
            <a href="alumnos/alumnos.php">ALUMNOS</a>
            <a href="grupos/grupos.php">GRUPOS</a>
            <a href="contactar/contactar.php">CONTACTAR</a>

        </div>

    </div>

    <div class="inicio">
        <div>
            <p>BIENVENIDO</p>
        </div>
        <div>
            <img src="../imagenes/logo.png" alt="LOGO" width="400" height="400">
        </div>
    </div>

    <!--CAJA BLANCA-->

    <div class="cajablanca">
    </div>

</main>

</body>

<footer>

    <div class="pie_corto">
        <p>Copyright © 2021 ITP Pablo de la Torre | Formación Profesional Dos Hermanas</p>
    </div>

</footer>

</html>

