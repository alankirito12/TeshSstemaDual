<html>
<?php  
if($_POST){
  include"Formulariocodigo.php";
}
?>
<div id="container">
  <h1>&bull; Formulario Aceptación &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
    <link rel="stylesheet" href="CodigoPHP/Css/estilosform.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
  </div>
  <form action="Formulario.php" method="post" id="contact_form"enctype="multipart/form-data">
    <div class="name">
      <label for="name"></label>
      <input autocomplete="off" type="text" placeholder="MATRICULA " name="Matricula" id="Matricula" required>
      <input autocomplete="off" type="text" placeholder="NOMBRE " name="Nombre" id="Nombre" required>
      <input autocomplete="off" type="text" placeholder="APELLIDOS " name="Apellidos" id="Apellidos" required>
      <input autocomplete="off" type="text" placeholder="PROMEDIO" name="Promedio" id="Promedio" >
      <label type="text" name="texto" id="texto" required>SUBIR CARGA ACADEMICA</label>
      <input type="file" name="Archivos" id="Archivos accept=".pdf,.jpg,.png" multiple"></p>
      <p></p>
    </div>
    <div class="email">
      <label for="email"></label>
            <input autocomplete="off" type="email" placeholder="EMAIL " name="Correo" id="Correo" value="">
      
    </div>
    <div class="email">
      <label for="name"></label>
      <input autocomplete="off" type="text" placeholder="TELEFONO" name="Telefono" id="Telefono" required>
      <input autocomplete="off" type="text" placeholder="MENTOR ACADEMICO" name="Docente" id="Docente" required>
      
    </div>
    <div> 
      <a align ="center" class ="ls" href ="galeriaempresas.php" target="_blank">CONOCE LOS BENEFICIOS DE CADA EMPRESA ANTES DE ESCOGER UNA</a>
      <p align="center" class="ls"></p>
    </div>
    <div class="subject">
      <inpt for="subject" name="Empresa" id="Empresa"></input>
      <select name="Empresa" id="Empresa" >
        <option disabled hidden selected>EMPRESAS ASOCIADAS AL TESH</option>
        <option autocomplete="off" value="TIXMEDIA S.A DE C.V">TIXMEDIA S.A DE C.V</option>
      <option autocomplete="off" value="ARQUITECTURA DE SOFTWARE">ARQUITECTURA DE SOFTWARE</option>
      <option autocomplete="off" value="VLIMIX S.C">VLIMIX S.C</option>
      <option autocomplete="off" value="SOULTECH DE R.L DE C.V">SOULTECH DE R.L DE C.V</option>
      <option autocomplete="off" value="HABIL RH SI.A DE C.V">HABIL RH SI.A DE C.V</option>
      <option autocomplete="off" value="INGENIEROS ESPECIALISTAS EN SOLUCIONES DE SISTEMAS INFORMÁTICOS Y A LA MEDIA DE SANTIAGO">INGENIEROS ESPECIALISTAS EN SOLUCIONES DE SISTEMAS INFORMÁTICOS Y A LA MEDIA DE SANTIAGO</option><p></p>
      </select>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="Asunto" placeholder="DEJA UNA DESCRIPCION DEL PORQUE QUIERES SER PARTE DE SISTEMA DUAL" id="Asunto"></textarea>
    </div>
      <input type="submit" value="ENVIAR FORMULARIO" id="form_button" />
    </div>
  </form><!-- // End form -->
</div><!-- // End #container -->
  
</html>
