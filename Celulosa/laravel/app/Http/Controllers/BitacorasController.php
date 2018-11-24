<?php

namespace App\Http\Controllers;

use App\Bitacora;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;

class BitacorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitacoras = Bitacora::all();
        return view('Bitacoras',compact('bitacoras'));
          //  with('i',(request()->inpu));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*
        request()->validate([
            'titulo' => 'required',
            //otros
            'puntaje' => 'required',
        ]);

        Bitacora::create($request->all());

        return redirect()->route('bitacora.index')
            ->with('sucess', 'Bitacora creada con éxito.');

            */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bitacora $bitacora)
    {
        //return view('detalle');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function evaluar(Request $request, $id, $puntaje)
    {
        return view('detalle',compact('bitacora'));
        //return('yrsss');
      /*
      return redirect()->route('bitacoras')
          ->with("evaluadooo con".$puntaje);
      */
    }
}
