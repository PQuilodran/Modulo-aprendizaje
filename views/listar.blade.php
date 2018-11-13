  <!DOCTYPE html>
  <html>
  <head>
     <meta charset="utf-8">
     <title>Listado de Socios</title>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
     <div class="container">
        <br />
        @if (\Session::has('success'))
           <div class="alert alert-success">
              <p>{{ \Session::get('success') }}</p>
           </div><br />
        @endif
        <table class="table table-striped">
        <thead>
          <tr>
             <th>ID      </th>
             <th>NOMBRE  </th>
             <th>CIUDAD  </th>
             <th colspan="2">Accion</th>
           </tr>
         </thead>
         <tbody>
            @foreach($socios as $socio)
            <tr>
              <td>{{$socio->cod}}     </td>
              <td>{{$socio->nombre}}  </td>
              <td>{{$socio->ciudad}}  </td>
              <td><a href="{{action('controladorSocio@editar', $socio->id)}}" class="btn btn-warning">Editar</a></td>
              <td>
                 <form action="{{action('controladorSocio@eliminar', $socio->id)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="ELIMINAR">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                 </form>
              </td>
            </tr>
            @endforeach
         </tbody>
         </table>
      </div>
  </body>
  </html>
