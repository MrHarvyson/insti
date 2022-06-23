<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preload" href="../../css/normalize.css" as="style">
    <link rel="preload" href="../../css/cabecera.css" as="style">
    <link rel="preload" href="../../css/alumno.css" as="style">

    <link href="../../css/normalize.css" rel="stylesheet">
    <link href="../../css/cabecera.css" rel="stylesheet">
    <link href="../../css/alumno.css" rel="stylesheet">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Prompt:wght@100&display=swap" rel="stylesheet">
    <title>ITP Formación Profesinal Informática</title>
    <link rel="short icon" href="../../imagenes/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../javascript/main.js"></script>
</head>

<body>

<!--BARRA SUPERIOR-->

<?php
include "../cabecera_sesion.php";
include "../conexion.php";
?>

<main>

    <!--CAJA BLANCA-->

    <div class="cajablanca">
    </div>

    <div class="wrap">

        <div class="submenu">

            <a href="../horarios/horarios.php">HORARIO</a>
            <a href="profesores.php">PROFESORES</a>
            <a href="../alumnos/alumnos.php">ALUMNOS</a>
            <a href="../grupos/grupos.php">GRUPOS</a>
            <a href="../contactar/contactar.php">CONTACTAR</a>

        </div>
    </div>

    <!--INTRO ALUMNOS-->

    <div class="contenedor_intro_alumno">

        <form class="formulario" action="introducir_profesores.php" method="post">

            <fieldset class="rellenar">

                <legend></legend>

                <div class="nombre">
                    <p>NOMBRE:</p>
                    <input type="text" name="nombre" placeholder="ESCRIBIR NOMBRE DEL PROFESOR" required="required" size="45">
                </div>

                <div class="apellido">
                    <p>APELLIDO:</p>
                    <input type="text" name="apellido" placeholder="ESCRIBIR APELLIDOS DEL PROFESOR" required="required" size="45">
                </div>

                <div class="telefono">
                    <p>TELÉFONO:</p>
                    <input type="tel" name="telefono" placeholder="ESCRIBIR TELEFONO DEL PROFESOR" required="required" size="45">
                </div>


                <div class="button_guardar">
                    <button type="submit" name="guardar">GUARDAR</button>
                </div>

            </fieldset>

        </form>

    </div>

    <!--TABLA ALUMNOS-->
    <table>

        <tr>
            <th class="cabecera_tabla">NOMBRE</th>
            <th class="cabecera_tabla">APELLIDO</th>
            <th class="cabecera_tabla">TELEFONO</th>
            <th class="cabecera_tabla">OPERACION</th>
        </tr>

        <?php

        $consulta2 = "select * from profesores";
        $resultado2 = mysqli_query($conex,$consulta2);

        while($row=mysqli_fetch_assoc($resultado2)) { ?>
            <tr>

                <th class="calcetin"><?php echo $row["nombre"];?></th>
                <th class="calcetin"><?php echo $row["apellidos"];?></th>
                <th class="calcetin"><?php echo $row["telefono"];?></th>
                <th><a class="vinculo" href="#?id=<?php echo $row["id"];?>" ><span class="material-symbols-outlined">login</span> | </a><a class="vinculo" href="#?id=<?php echo $row["id"];?>" ><span class="material-symbols-outlined">tune</span> | </a><a class="vinculo" href="eliminar_profesor.php?id=<?php echo $row["id"];?>"><span class="material-symbols-outlined">delete</span></a></th>

            </tr>
        <?php } mysqli_free_result($resultado2); ?>


    </table>





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