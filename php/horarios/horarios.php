<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preload" href="../../css/normalize.css" as="style">
    <link rel="preload" href="../../css/cabecera.css" as="style">
    <link rel="preload" href="../../css/horario.css" as="style">

    <link href="../../css/normalize.css" rel="stylesheet">
    <link href="../../css/cabecera.css" rel="stylesheet">
    <link href="../../css/horario.css" rel="stylesheet">


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
include "../conexion.php";
include("../cabecera_sesion.php")
?>

<main>

    <!--CAJA BLANCA-->

    <div class="cajablanca">
    </div>

    <!--SUBMENU-->

    <div class="wrap">

        <div class="submenu">

            <a href="horarios.php">HORARIO</a>
            <a href="../profesores/profesores.php">PROFESORES</a>
            <a href="../alumnos/alumnos.php">ALUMNOS</a>
            <a href="../grupos/grupos.php">GRUPOS</a>
            <a href="../contactar/contactar.php">CONTACTAR</a>

        </div>

    </div>

    <!--CONTENIDO-->

    <form action="horarios.php" class="seleccionar_asignatura" method="post">
        <div class="barra_busqueda">
            <div>
                <label>ASIGNATURA:</label>
                <select name="asignatura" >
                    <?php

                    $consultaAsignatura = "select asignatura from grupos group by asignatura";
                    $resultadoAsignatura = mysqli_query($conex,$consultaAsignatura);
                    ?>
                    <option value="seleccionar"> SELECCIONAR </option>
                    <?php
                    while($datos=mysqli_fetch_array($resultadoAsignatura)){

                        ?>
                        <option value="<?php echo $datos['asignatura'] ?>"> <?php echo $datos['asignatura'] ?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div>
                <label>CURSO:</label>
                <select name="curso" >
                    <?php

                    $consultaCurso = "select curso from grupos group by curso";
                    $resultadoCurso = mysqli_query($conex,$consultaCurso);
                    ?>
                    <option value="seleccionar"> SELECCIONAR </option>
                    <?php
                    while($datosCurso=mysqli_fetch_array($resultadoCurso)){

                        ?>
                        <option value="<?php echo $datosCurso['curso'] ?>"> <?php echo $datosCurso['curso'] ?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="button_buscar">
                <button type="submit" name="enviar" >BUSCAR</button>
            </div>
        </div>


        </form>

    <div class="act">
        <div class="act2">
            <div class="asignatura">
                <p>ASIGNATURA: <?php
                    if (isset($_POST['enviar'])){
                        echo $_POST['asignatura'];
                    }else{
                        echo '';
                    }
                    ?></p>
            </div>
            <div class="curso">
                <p>CURSO: <?php
                    if (isset($_POST['enviar'])){
                        echo $_POST['curso'];
                    }else{
                        echo '';
                    }
                    ?></p>
            </div>
        </div>

    </div>


    <div class="tabla">
        <div>
            <p>HORA</p>
        </div>
        <div>
            <p>LUNES</p>
        </div>
        <div>
            <p>MARTES</p>
        </div>
        <div>
            <p>MIERCOLES</p>
        </div>
        <div>
            <p>JUEVES</p>
        </div>
        <div>
            <p>VIERNES</p>
        </div>
        <div>
            <p>8:00 / 9:00</p>
        </div>
        <div>
            <!--LUNES-->
            <?php


            if (isset($_POST['enviar'])){

                $consultahora = "select nombre from grupos where hora like '08:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'lunes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }


            ?>

        </div>
        <div>
            <!--MARTES-->
            <?php


            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '08:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'martes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MIERCOLES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '08:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'miercoles'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }

            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--JUEVES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '08:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'jueves'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--VIERNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '08:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'viernes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <p>9:00 / 10:00</p>
        </div>
        <div>
            <!--LUNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '09:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'lunes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MARTES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '09:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'martes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MIERCOLES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '09:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'miercoles'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--JUEVES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '09:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'jueves'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--VIERNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '09:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'viernes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <p>10:00 / 11:00</p>
        </div>
        <div>
            <!--LUNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '10:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'lunes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MARTES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '10:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'martes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MIERCOLES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '10:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'miercoles'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--JUEVES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '10:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'jueves'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--VIERNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '10:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'viernes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <p>11:00 / 12:00</p>
        </div>
        <div>
            <!--LUNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '11:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'lunes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MARTES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '11:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'martes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--MIERCOLES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '11:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'miercoles'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--JUEVES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '11:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'jueves'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

        </div>
        <div>
            <!--VIERNES-->
            <?php

            if (isset($_POST['enviar'])){
                $consultahora = "select nombre from grupos where hora like '11:00:00' and asignatura like '{$_POST['asignatura']}' and curso like '{$_POST['curso']}' and dia like 'viernes'";
                $resultadohora = mysqli_query($conex,$consultahora);

                if (mysqli_num_rows($resultadohora) >0){
                    while($datos=mysqli_fetch_array($resultadohora)){
                        ?>
                        <a href="#"> <?php echo $datos['nombre'] ?> </a>
                        <?php
                    }
                }else{
                    echo 'NO HAY GRUPO';
                }
            }else{
                echo '';
            }

            ?>

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
