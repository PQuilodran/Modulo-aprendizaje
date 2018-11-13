<!DOCTYPE html>
<html len="es">
 <head>
  <title>Celulosa</title>
  <meta charset="UTF-8"/>
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <style>
   body {
    margin: 0px;
    width: 100%;
    height: 1000px;
   }
   header {
    background-color: #2E9AFE;
    text-orientation: center;
    font-size:30px;
    width: 100%;
    height: 28%;
    font-family: 'Monoton', cursive;
   }
   nav{
    background-color: #58ACFA;
    width: 100%;
    height: 5%;
    font-family: 'Playfair Display SC', serif;
    font-family: 'Handlee', cursive;
    font-family: 'Gochi Hand', cursive;
    font-family: 'Copse', serif;
   }
   section{
    background-color: #2E9AFE;
    width: 100%;
    height: 225%;
   }

   footer{
    background-color: #2E9AFE;
    width: 100%;
    height: 12%;
   }

   #menu{
    margin: 0px;
    position:inherit;
    height: 100%;

   }
   #menu li{
    height: 50px; /* fondo del menu letras  */
    width: 150px; /* tamaño del fondo letra menu  */
    text-align: center;
    float : left;
    margin-right:  25px;
    line-height: 50px; /* corre hace abajo letra del menu */
    background-color: #FFE4B5;  /* color fono de letra */
    color: white;
    font-size: 25px;
    color: black;
    list-style:none;
   }
   h1{
    margin:  0px;
   }
   #contacto{
    margin-top: 0px;
   }
   #contacto li{
    list-style:none;
   }
   p{
    font-size: 30px;
    text-align: center;
   }
   </style>
 </head>
 <body>
  <header>
                <br>
                <br>


           <center><h1 style ="text-align:center ">Celulosa</h1></center>



        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="welcome.blade.php">Principal</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="Materias">Materias <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="editor">Bitacora</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Comentarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Caficaciones</a>
              </li>
            </ul>
          </div>
        </nav>
  <section>
    <br>
    <br>
    <br>
    <p > Bienvenido la bitaciora </p>
    <form method="get" action="http://localhost/integracion/Modulo-aprendizaje/Celulosa/laravel/resources/views/editor">
    <input type="submit" value="Ediccion de bitacora" />
  </section>
<br>



</body>
