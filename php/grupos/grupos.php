<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="preload" href="../../css/normalize.css" as="style">
    <link rel="preload" href="../../css/cabecera.css" as="style">
    <link rel="preload" href="../../css/grupos.css" as="style">

    <link href="../../css/normalize.css" rel="stylesheet">
    <link href="../../css/cabecera.css" rel="stylesheet">
    <link href="../../css/grupos.css" rel="stylesheet">


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
            <a href="../profesores/profesores.php">PROFESORES</a>
            <a href="../alumnos/alumnos.php">ALUMNOS</a>
            <a href="grupos.php">GRUPOS</a>
            <a href="../contactar/contactar.php">CONTACTAR</a>

        </div>
    </div>

    <!--INTRO ALUMNOS-->

    <div class="contenedor_intro_grupos">

        <form class="formulario" action="introducir_grupo.php" method="post">

            <fieldset class="rellenar">

                <legend></legend>

                <div class="nombre">
                    <p>NOMBRE:</p>
                    <input type="text" name="nombre" placeholder="NOMBRE DE GRUPO" required="required" size="45">
                </div>

                <div class="curso">
                    <p>CURSO:</p>
                    <select name="curso">
                        <option value="seleccionar">SELECCIONAR</option>
                        <option value="1 ESO">1 ESO</option>
                        <option value="2 ESO">2 ESO</option>
                        <option value="3 ESO">3 ESO</option>
                        <option value="4 ESO">4 ESO</option>
                    </select>

                </div>

                <div class="asignatura">
                    <p>ASIGNATURA:</p>
                    <select name="asignatura">
                        <option value="seleccionar">SELECCIONAR</option>
                        <option value="MATEMATICAS">MATEMATICAS</option>
                        <option value="LENGUA">LENGUA</option>
                        <option value="FISICA">FISICA</option>
                        <option value="QUIMICA">QUIMICA</option>
                        <option value="INGLES">INGLES</option>
                        <option value="HISTORIA">HISTORIA</option>
                        <option value="FILOSOFIA">FILOSOFIA</option>
                    </select>
                </div>

                <div class="hora">
                    <p>HORA:</p>
                    <select name="hora">
                        <option value="seleccionar">SELECCIONAR</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                    </select>

                </div>

                <div class="dia">
                    <p>DIA:</p>
                    <select name="dia">
                        <option value="seleccionar">SELECCIONAR</option>
                        <option value="lunes">LUNES</option>
                        <option value="martes">MARTES</option>
                        <option value="miercoles">MIERCOLES</option>
                        <option value="jueves">JUEVES</option>
                        <option value="viernes">VIERNES</option>
                    </select>

                </div>

                <div class="profesores">
                    <p>PROFESORES:</p>
                    <select name="profesores" >
                        <?php

                        $consultaGrupo = "select nombre,id from profesores";
                        $resultadoGrupo = mysqli_query($conex,$consultaGrupo);
                        ?>
                        <option value="seleccionar"> SELECCIONAR </option>
                        <?php
                        while($datos=mysqli_fetch_array($resultadoGrupo)){

                            ?>
                            <option value="<?php echo $datos['id'] ?>"> <?php echo $datos['nombre'] ?> </option>
                            <?php
                        }
                        ?>

                    </select>
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
            <th class="cabecera_tabla">CURSO</th>
            <th class="cabecera_tabla">ASIGNATURA</th>
            <th class="cabecera_tabla">HORA</th>
            <th class="cabecera_tabla">DIA</th>
            <th class="cabecera_tabla">PROFESOR</th>
            <th class="cabecera_tabla">OPERACION</th>
        </tr>

        <?php

        $consulta2 = "select * from grupos";
        $resultado2 = mysqli_query($conex,$consulta2);

        while($row=mysqli_fetch_assoc($resultado2)) { ?>
            <tr>

                <th class="calcetin"><?php echo $row["nombre"];?></th>
                <th class="calcetin"><?php echo $row["curso"];?></th>
                <th class="calcetin"><?php echo $row["asignatura"];?></th>
                <th class="calcetin"><?php echo $row["hora"];?></th>
                <th class="calcetin"><?php echo $row["dia"];?></th>
                <th class="calcetin"><?php echo $row["id_profesores"];?></th>
                <th><a class="vinculo" href="#?nombre=<?php echo $row["nombre"];?>" ><span class="material-symbols-outlined">login</span> | </a><a class="vinculo" href="#?nombre=<?php echo $row["nombre"];?>" ><span class="material-symbols-outlined">tune</span> | </a><a class="vinculo" href="eliminar_grupo.php?nombre=<?php echo $row["nombre"];?>"><span class="material-symbols-outlined">delete</span></a></th>


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