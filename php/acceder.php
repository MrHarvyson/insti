<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Prompt:wght@100&display=swap" rel="stylesheet">

  <link rel="preload" href="../css/normalize.css" as="style">
  <link rel="preload" href="../css/cabecera.css" as="style">
  <link rel="preload" href="../css/index.css" as="style">

  <link href="../css/normalize.css" rel="stylesheet">
  <link href="../css/cabecera.css" rel="stylesheet">
  <link href="../css/index.css" rel="stylesheet">
  <title>ITP Formación Profesinal Informática</title>
  <link rel="short icon" href="../imagenes/logo.png">
</head>

<body>

<!--BARRA SUPERIOR-->

<?php
include("../php/cabecera_login.php")
?>


<main>

  <!--CAJA BLANCA-->

  <div class="cajablanca">
  </div>

  <!--CAJA BLANCA-->

  <div class="cajablanca">
  </div>



  <form class="login" action="login.php" method="post">

    <div class="rellenar">

      <div class="usuario">
        <p>USUARIO:</p>
        <input type="text" name="usuario" placeholder="USUARIO" required="required" size="50">
      </div>

      <div class="contrasena">
        <p>CORREO:</p>
        <input type="password" name="contrasena" placeholder="CONTRASEÑA" required="required" size="50">
      </div>

      <div class="loginenter">
        <button type="submit" name="enviar">ENTRAR</button>
      </div>

    </div>

  </form>



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