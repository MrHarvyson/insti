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

        <form action="modificar_contacto.php" method="post">

            <?php
            ;
            $id = $_GET["id"];
            $editar = "select * from contactos where id ='$id'";


            $resultado = mysqli_query($conex,$editar);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
                <input type="hidden" value="<?php echo $row["id"];?>" name="id" >
                <p>NOMBRE:</p>
                <input type="text" value="<?php echo $row["nombre"];?>" name="nombre" size="50">
                <p>TELEFONO:</p>
                <input type="text" value="<?php echo $row["telefono"];?>" name="telefono" size="50">
                <p>CORREO:</p>
                <input type="text" value="<?php echo $row["correo"];?>" name="correo" size="50">
                <p>TIPO:</p>
                <label>GRADO:</label> <br>
                <select name="tipo" id="">
                    <option value="<?php echo $row["tipo"];?>"><?php echo $row["tipo"];?></option>
                    <option value="GRADO MEDIO">GRADO MEDIO</option>
                    <option value="GRADO SUPERIOR">GRADO SUPERIOR</option>
                </select>
                <p>COMENTARIO:</p>
                <input type="text" value="<?php echo $row["comentario"];?>" name="comentario" size="50">
                <p></p>
                <button type="submit" name="actualizar">ACTUALIZAR</button>


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