<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\ServSicologico;
use App\Inscrito;
use Auth;

class SicologicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario = Auth::check();

        if($usuario)
        {
            $request->user()->authorizeRoles('sicologo');

            $sicologicos = ServSicologico::all();

            return view('sicologicos.index', compact('sicologicos'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('sicologicos.index', compact('mensaje'));
        }


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscritos = Inscrito::all();

        return view('sicologicos.create', compact('inscritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sicologico = new ServSicologico();
        $fecha = new DateTime();
        $sicologico->fecha = $fecha;
        $sicologico->inscrito_id = $request->inscrito_id;
        $sicologico->descripcion = $request->descripcion;

        if(empty($request->recomendaciones))
        {
            $sicologico->recomendaciones = "Ninguna";
        }else{
            $sicologico->recomendaciones = $request->recomendaciones;
        }

        

        $sicologico->save();

        return redirect()->route('sicologicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sicologico = ServSicologico::find($id);
        
        return view('sicologicos.edit', compact('sicologico', 'id'));
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
        $sicologico = ServSicologico::find($id);
        $sicologico->descripcion = $request->descripcion;
        $sicologico->recomendaciones = $request->recomendaciones;

        $sicologico->save();

        return redirect()->route('sicologicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sicologico = ServSicologico::find($id);

        $sicologico->delete();

        return redirect()->route('sicologicos.index');
    }
}
