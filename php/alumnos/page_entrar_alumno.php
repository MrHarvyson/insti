<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preload" href="../../css/normalize.css" as="style">
    <link rel="preload" href="../../css/cabecera.css" as="style">
    <link rel="preload" href="../../css/editarcss.css" as="style">

    <link href="../../css/normalize.css" rel="stylesheet">
    <link href="../../css/cabecera.css" rel="stylesheet">
    <link href="../../css/editarcss.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Prompt:wght@100&display=swap" rel="stylesheet">
    <title>ITP Formación Profesinal Informática</title>
    <link rel="short icon" href="../../imagenes/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../javascript/main.js"></script>
</head>

<body>

<!--BARRA SUPERIOR-->
<?php
include '../cabecera_sesion.php';
include "../conexion.php";
?>

<main>

    <!--CAJA BLANCA-->

    <div class="cajablanca">
    </div>

    <div class="contenedor_actualizar">

        <form>

            <?php

            $id = $_GET["id"];
            $editar = "select * from alumnos where id ='$id'";


            $resultado = mysqli_query($conex,$editar);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
                <input type="hidden" value="<?php echo $row["id"];?>" name="id" >
                <p>NOMBRE: <?php echo $row["nombre"];?></p>

                <p>APELLIDO: <?php echo $row["apellido"];?></p>

                <p>TELEFONO: <?php echo $row["telefono"];?></p>

            <?php } mysqli_free_result($resultado);?>

        </form>

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