<!DOCTYPE html>
<html len="es">
 <head>
  <title>Materias</title>
  <meta charset="UTF-8"/>
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <style>
   body {
    margin: 0px;
    width: 100%;
    height: 650px;
    }
   header {
    background-color: #68ECE0;  /*Color de la parte de arriba   */
    text-orientation: center;
    font-size:20px;
    width: 100%;
    height:35%;
    background-image:url(nuev.jpg);
   }
   nav{
    background-color: #F5EE1A;  /* Color del navegador*/
    width: 100%;
    height: 6%;
    font-family: 'Playfair Display SC', serif;
    font-family: 'Handlee', cursive;
    font-family: 'Gochi Hand', cursive;
    font-family: 'Copse', serif;
   }
    section{
    background-color: #B9F167;
    width: 100%;
    height: 100%;
   }
    footer{
    background-color: #F5DEB3;
    width: 100%;
    height: 12%;
   }
    </style>
 </head>
 <body>
  <header>
         </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <b><a class="navbar-brand" href="principal.php">Principal</a></b>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <b><a class="nav-link" href="Materias">Materias <span class="sr-only">(current)</span></a></b>
              </li>
            </ul>
          </div>
        </nav>
  <section>
    <br><br>
    <center><b><font face="times new roman" size=24>Materias</font></b></center>
     <br><br>
    <center><b><li >Nombre del Proyecto</li></b></center>
    <center><input type="text" name="nombre" id="nombre" size=60></center>
    <br>
    <center><b><li >Seleciona una Materia</li></b></center>
    <center><select name="seleccione materia ">
  <option value="> Matematicas Discretas">Matematicas Discretas</option>
  <option value="Programacion para sistemas">Programacion para sistemas</option>
  <option value="Algoritmo y estructura">Algoritmo y Estructura</option>
  <option value="Estructura de Computadores">Estructura de Computadores</option>
  <option value="Algoritmica numerica">Algoritmica numerica</option>
  <option value="Concurrencia">Concurrencia</option>
  <option value="Bases de Datos">Bases de Datos</option>
  <option value="Arquitectura de Computadores">Arquitectura de Computadores</option>
  <option value="Sistemas operativos redes de computadores">Sistemas operativos redes de computadores</option>
  <option value="Fundamentos de economia">Fundamentos de economia y administracion de empresas</option>
  <option value="Fundamentos de gestion">Fundamentos de gestion de tecnologias de la informacion en empresas</option>
  <option value="> Otros">Otras</option>
</select></center>
<br><br>
<center><button type="submit">Enviar</button>
<button type="reset">Borrar</button>
<button type="button">Volver</button></center>
 </section>
</body>