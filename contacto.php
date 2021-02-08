<?php
include "config/config.php";
include "config/funciones.php";


if(isset($enviar)){
  $nombre= clear ($nombre);
  $apellido= clear ($apellido);
  $email= clear ($email);
  $mensaje= clear ($mensaje);

    $mysqli-> query("INSERT INTO contacto (Nombre, Apellido, Email, Mensaje) VALUES ('$nombre', '$apellido', '$email', '$mensaje')"); 
    redir("contacto.php");
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Covid19</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/normal.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <header class="site-header">
      <div class="contenedor">
        <div class="barra">
          <a href="index.php">
            <h1 class="no-margin">Covid<span>19</span></h1>
          </a>

          <nav class="navegacion">
          <a href="./admin">Admin</a>
                <a href="Prevencion.php">Prevencion</a>
                <a href="Causas.php">Causas</a>
                <a href="contacto.php">Contacto</a>
          </nav>
        </div>
        <!--barra-->
        <div class="texto-header">
          <h2 class="no-margin">Covid19 prevencion, casus y sintomas</h2>
          <p class="no-margin">Pandemia</p>
        </div>
      </div>
      <!--contenedor-->
    </header>
    <main class="contenedor">
      <h2 class="centrar-texto">Contacto</h2>

      <div class="grid centrar-columnas">

        <div class="columnas-10 formulario-contacto">
          <form method="post" action="">
            <div class="campo">
              <label for="Apellido">Nombre</label>
              <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" />
            </div>

            <div class="campo"> 
              <label for="Apellido">Apellido</label>
              <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
            </div>

            <div class="campo">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Tu Correo" required />
            </div>

            <div class="campo mensaje">
              <label for="mensaje">Mensaje</label>
              <textarea name="mensaje"></textarea>
            </div>
            <div class="campo enviar">
              <input type="submit" value="Enviar" name="enviar" class="btn btn-primario" />
            </div>
          </form>
        </div>
      </div>
    </main>

  <footer class="site-footer">
      <div class="contenedor">
        <div class="barra">
          <p class="no-margin">Covid<span>19</span></p>

          <nav class="navegacion">
          <a href="./admin">Admin</a>
                <a href="Prevencion.php">Prevencion</a>
                <a href="Causas.php">Causas</a>
                <a href="contacto.php">Contacto</a>
          </nav>
        </div>
      </div>
    </footer>
  </body>
</html>
