<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preload" href="../../css/normalize.css" as="style">
    <link rel="preload" href="../../css/cabecera.css" as="style">
    <link rel="preload" href="../../css/sesioncss.css" as="style">

    <link href="../../css/normalize.css" rel="stylesheet">
    <link href="../../css/cabecera.css" rel="stylesheet">
    <link href="../../css/sesioncss.css" rel="stylesheet">


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
include "../conexion.php"
?>

<main>

    <!--CAJA BLANCA-->

    <div class="cajablanca">
    </div>

    <div class="wrap">

        <div class="submenu">

            <a href="../horarios/horarios.php">HORARIO</a>
            <a href="../profesores/profesores.php">PROFESORES</a>
            <a href="../alumnos/alumnos.php">ALUMNOS</a>
            <a href="../grupos/grupos.php">GRUPOS</a>
            <a href="contactar.php">CONTACTAR</a>

        </div>
    </div>

    <table>

        <tr>
            <th class="cabecera_tabla">NOMBRE</th>
            <th class="cabecera_tabla">TELEFONO</th>
            <th class="cabecera_tabla">CORREO</th>
            <th class="cabecera_tabla">TIPO</th>
            <th class="cabecera_tabla">COMENTARIO</th>
            <th class="cabecera_tabla">OPERACION</th>
        </tr>

        <?php

        $consulta = "select * from contactos";
        $resultado = mysqli_query($conex,$consulta);

        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr>

                <th class="calcetin"><?php echo $row["nombre"];?></th>
                <th class="calcetin"><?php echo $row["telefono"];?></th>
                <th class="calcetin"><?php echo $row["correo"];?></th>
                <th><?php echo $row["tipo"];?></th>
                <th class="calcetin"><?php echo $row["comentario"];?></th>
                <th><a class="vinculo" href="page_entrar_contacto.php?id=<?php echo $row["id"];?>" ><span class="material-symbols-outlined">login</span> | </a><a class="vinculo" href="page_editar_contacto.php?id=<?php echo $row["id"];?>" ><span class="material-symbols-outlined">tune</span> | </a><a class="vinculo" href="eliminar_contacto.php?id=<?php echo $row["id"];?>"><span class="material-symbols-outlined">delete</span></a></th>


            </tr>
        <?php } mysqli_free_result($resultado); ?>


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