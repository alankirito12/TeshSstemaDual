<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://formulariopruebas.000webhostapp.com/Css/estilos.css">
    <link rel="stylesheet" href="https://formulariopruebas.000webhostapp.com/Css/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    <script src="validar.js"></script>
  </head>
  <?php
    if ($_POST) {
         include("logincodigo.php");
     }
     
     ?>
     
  <body>
    <body background="https://formulariopruebas.000webhostapp.com/Img/plantilla.jpg"></body>
    <div class="contenedor">
    <H1 align="center">EDUCACIÓN DUAL</H1>
      <div class="login">
        <article class="fondo">
          <img src="https://formulariopruebas.000webhostapp.com/Img/Imagen1.jpg" alt="User">
          <h3>Inicio de Sesión</h3>
          <form class="" action="login.php" method="post" onsubmit = "return validar();">
            <span class="icon-user"></span><input autocomplete="off" class="inp" type="text" name="MATRICULA" placeholder="Matricula" value=""><br>
            <span class="icon-key"></span><input autocomplete="off" class="inp" type="password" name="CONTRASEÑA" value="" placeholder="Password"><br>
            <input class="boton" type="submit" value="Iniciar sesion">

            <p></p>
            <p></p>
            <a class="he1" href="https://formulariopruebas.000webhostapp.com/index.html">Pagina Principal</a>
          </form>
        </article>
      </div>

    </div>
  </body>
</html>