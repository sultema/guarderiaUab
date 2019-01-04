<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Asistencia;
use App\Inscrito;
use Auth;

class AsistenciaController extends Controller
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
            $request->user()->authorizeRoles('educadora');

            $asistencias = Asistencia::all();

            return view('asistencias.index', compact('asistencias'));

        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('asistencias.index', compact('mensaje'));

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
        return view('asistencias.create', compact('inscritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asistencia = new Asistencia();
        $fecha = new DateTime();
        $asistencia->fecha = $fecha;
        $asistencia->inscrito_id = $request->inscrito_id;
        $asistencia->horaingreso = $request->horaingreso;
        $asistencia->horasalida = $request->horasalida;

        $asistencia->save();

        return redirect()->route('asistencias.index');
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
        $asistencia = Asistencia::find($id);

        return view('asistencias.edit', compact('asistencia', 'id'));
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
        $asistencia = Asistencia::find($id);
        $asistencia->horaingreso = $request->horaingreso;
        $asistencia->horasalida = $request->horasalida;

        $asistencia->save();

        return redirect()->route('asistencias.index');
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
}
