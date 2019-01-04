<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Evaluacion;
use App\Inscrito;
use Auth;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usario = Auth::check();

        if($usario)
        {
            $request->user()->authorizeRoles('educadora');

            $evaluaciones = Evaluacion::all();
            return view('evaluaciones.index', compact('evaluaciones'));

        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('evaluaciones.index', compact('mensaje'));
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

        return view('evaluaciones.create', compact('inscritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion();
        $fecha = new DateTime();
        $evaluacion->fecha = $fecha;
        $evaluacion->inscrito_id = $request->inscrito_id;
        $evaluacion->comunidadsociedad = $request->comunidadsociedad;
        $evaluacion->ciencia = $request->ciencia;
        $evaluacion->vidatierra = $request->vidatierra;
        $evaluacion->cosmos = $request->cosmos;

        $evaluacion->save();

        return redirect()->route('evaluaciones.index');
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
        $evaluacion = Evaluacion::find($id);
        
        return view('evaluaciones.edit', compact('evaluacion', 'id'));
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
        $evaluacion = Evaluacion::find($id);
        $evaluacion->comunidadsociedad = $request->comunidadsociedad;
        $evaluacion->ciencia = $request->ciencia;
        $evaluacion->vidatierra = $request->vidatierra;
        $evaluacion->cosmos = $request->cosmos;

        $evaluacion->save();

        return redirect()->route('evaluaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evaluacion = Evaluacion::find($id);

        $evaluacion->delete();

        return redirect()->route('evaluaciones.index');
    }
}
