<!DOCTYPE html>
<html len="es">
 <head>
  <title>Celulosa</title>
  <meta charset="UTF-8"/>
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
  <style>
   body {
    margin: 0px;
    width: 100%;
    height: 1000px;
    
   }
   header {
    background-color: #CD5C5C;
    text-orientation: center;
    font-size:30px;
    width: 100%;
    height: 38%;
    font-family: 'Monoton', cursive;
    background-image:url(imagenes/mm.jpg);
   }
   nav{
    background-color: #FFE4B5;
    width: 100%;
    height: 5%;
    font-family: 'Playfair Display SC', serif;
    font-family: 'Handlee', cursive;
    font-family: 'Gochi Hand', cursive;
    font-family: 'Copse', serif;
   }
   .content-all{
    width: 210px;
    margin: auto;
    perspective: 800px;
    position: relative;
    margin-top: 50px;
}

.content-carrousel{
    width: 100%;
    position: absolute;
    animation: rotar 10s infinite linear;
    transform-style: preserve-3d;
}

.content-carrousel:hover{
    animation-play-state: paused;
    cursor: pointer;
}


.content-carrousel figure{
    width: 100%;
    height: 120px;
    overflow: hidden;
    position: absolute;
    box-shadow: 0px 0px 20px 0px black;
    transition: all 300ms;
    
}

.content-carrousel figure:hover{
    box-shadow: 0px 0px 0px 0px black;
    transition: all 300ms;
}
   .content-carrousel figure:hover{
    box-shadow: 0px 0px 0px 0px black;
    transition: all 300ms;
}

.content-carrousel figure:nth-child(1){transform: rotateZ(0deg) translateZ(300px);}



.content-carrousel img{
    width: 90%;
    transition: all 300ms;
}

.content-carrousel img:hover{
    transform: scale(1.3);
    transition: all 200ms;
}
@keyframes rotar{
    from{
        transform: rotateY(0deg);
    }to{
        transform: rotateY(360deg);
    }
}


   section{
    background-color: #FFEFD5;
    width: 100%;
    height: 225%;
   }
   
   footer{
    background-color: #F5DEB3;
    width: 100%;
    height: 12%;
   }
   
   #menu{
    margin: 0px;
    position:inherit;
    height: 100%;
    
   }
   #menu li{
    height: 50px;
    width: 200px;
    text-align: center;
    float : left; 
    margin-right:  100px;
    line-height: 50px;
    background-color: #FFE4B5;
    color: white;
    font-size: 35px;
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
                <br>
           <center><h1 style ="text-align:center ">Celulosa</h1></center>
                      
  
        </header>
  <nav> 
   <ul id ="menu" >
     <div class="links">
                    <a href="https://laravel.com/docs">login</a>
                    <a href="https://laracasts.com">register</a>
                    <a href="Materias">Materias</a>
                    <a href="https://nova.laravel.com">Comentarios</a>
                    <a href="https://forge.laravel.com">Calificacions</a>
                    <a href="https://github.com/laravel/laravel">Integracion</a>
                </div>
            </ul> 
        </nav>