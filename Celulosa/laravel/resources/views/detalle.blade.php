@extends('layouts.app')
@section('title','Viendo bitacora..')

@section('content')
    <div>
        <h1>{{ $bitacora->titulo }}</h1>
        <div>contenido de la bitacora..<div>
        <div>
        <!--<form action ="{{ action('bitacoras.evaluar',$bitacora->id) }}" method="POST">
          <input type=text name="" value="{{ $bitacora->puntaje }}">
          <button type="submit" >evaluar</button>
        </form>-->
        Puntaje: {{ $bitacora->$puntaje }}
        </div>

    </div>

@endsection
