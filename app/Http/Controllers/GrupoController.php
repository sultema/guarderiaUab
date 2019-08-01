<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Educadora;
use Auth;

class GrupoController extends Controller
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

            $grupos = Grupo::all();
            return view('grupos.index', compact('grupos'));
        }else
        {
            $mensaje = "Usuario No Auntenticado!";
            return View('grupos.index', compact('mensaje'));
        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $educadoras = Educadora::all();
        return view('grupos.create', compact('educadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = new Grupo();
        $grupo->anio = $request->anio;
        $grupo->nombre = $request->nombre;
        $grupo->turno = $request->turno;
        $grupo->educadora_id = $request->educadora_id;
        $grupo->save();

        return redirect()->route('grupos.index');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo = Grupo::find($id);
        return view('grupos.show', compact('gruppo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = Grupo::find($id);
        $educadoras = Educadora::all();

        return view('grupos.edit',compact('grupo','educadoras', 'id'));
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
        $grupo = Grupo::find($id);
        $grupo->nombre = $request->nombre;
        $grupo->turno = $request->turno;
        $grupo->educadora_id = $request->educadora_id;
        $grupo->save();

        return redirect()->route('grupos.index');
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
