<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscrito;
use App\Infante;
use App\Grupo;
use DateTime;
use Auth;

class InscritoController extends Controller
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
            $request->user()->authorizeRoles(['administrador','secretaria']);
            $inscritos=Inscrito::all();
            return view('inscritos.index', compact('inscritos'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('inscritos.index', compact('mensaje'));
        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infantes = Infante::all();
        $grupos = Grupo::all();
        return view('inscritos.create', compact('infantes', 'grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscrito = new Inscrito();
        $fecha = new DateTime();
        $inscrito->fecha = $fecha;
        $inscrito->infante_id = $request->infante_id;
        $inscrito->grupo_id = $request->grupo_id;
        if(empty($request->obervaciobnes))
        {
            $inscrito->observaciones = "Ninguna";
        }else{
            $inscrito->observaciones = $request->observaciones;
        }
        $inscrito->save();

        return redirect()->route('inscritos.index');
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
        $inscrito = Inscrito::find($id);
        $infantes = infante::all();
        $grupos = Grupo::all();

        return view('inscritos.edit', compact('inscrito', 'infantes', 'grupos','id'));
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
        $inscrito = Inscrito::find($id);
        $inscrito->infante_id = $request->infante_id;
        $inscrito->grupo_id = $request->grupo_id;
        if(empty($request->obervaciobnes))
        {
            $inscrito->observaciones = "Ninguna";
        }else{
            $inscrito->observaciones = $request->observaciones;
        }

        $inscrito->save();

        return redirect()->route('inscritos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscrito = Inscrito::find($id);
        $inscrito->delete();

        return redirect()->route('inscritos.index');
    }
}
