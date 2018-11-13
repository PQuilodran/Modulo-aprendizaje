<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Socio</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Editar un socio</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('controladorSocio@agregar', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">NOMBRE:</label>
            <input type="text" class="form-control" name="nombre" value="{{$socio->nombre}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="ciudad">CIUDAD:</label>
            <input type="text" class="form-control" name="ciudad" value="{{$socio->ciudad}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Actualizar</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>