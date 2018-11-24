@extends('layouts.app')
@section('title','Listado de bitacoras de esta materia')

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Título</th>
            <th>Puntaje</th>
        </tr>

	    @foreach ($bitacoras as $bitacora)
	    <tr>
	        <td>{{ $bitacora->titulo }}</td>
	        <td>{{ $bitacora->puntaje }}</td>
          <!--<td><a href={{ action('BitacorasController@show',$bitacora->id) }}>ver vitacora</a></td>-->
	    </tr>
	    @endforeach
    </table>

@endsection
