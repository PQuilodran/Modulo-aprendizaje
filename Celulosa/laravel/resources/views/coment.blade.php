<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>comentario</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <div class="container">	
          <div class="row" style="margin-top: 5%; margin-bottom: 5%">
            <div class="col-md-10">
                <h2>
                  holaaaaa
                </h2>
                <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blablabla bla bla bla bla bla</p>

                <label for="comennt">Comentarios</label>
                <div style="background-color:rgba(153, 243, 243,0.5); margin-top: 2%">
                            <div class="panel-heading">Autor:
                                <?php 
                                if (empty($row['name'])) 
                                    {
                                        echo "anonymous";
                                    }
                                    else{
                                        echo $row['name'];
                                    }
                                 ?>
                            </div>
                            <div class="panel-body">
                            <label><?php echo $row['com']; ?></label>
                            <p class="text-right"><?php echo $row['date']; ?></p>
                            </div>

                             
                        </div>                      
                        

                
                    <form class="form-group" action="guardar.php" method='POST'>
                    <label for="comennt">Agregar comentario</label>
                	<textarea type="text" rows="5" name="coment" id="coment" class="form-control"></textarea>
                	<button type="submit" class="btn btn-primary">Enviar Comentario</button>
                    </form>

            </div>
        </div>
    </div>
    </body>
</html>
<?php mysqli_close ($con); ?>