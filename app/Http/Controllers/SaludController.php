<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Inscrito;
use App\ServSalud;
use Auth;

class SaludController extends Controller
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
            $request->user()->authorizeRoles('medico');
            $saludes = ServSalud::all();

            return view('salud.index', compact('saludes'));

        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('salud.index', compact('mensaje'));
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

        return view('salud.create', compact('inscritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salud = new ServSalud();
        $fecha = new DateTime();
        $salud->fecha = $fecha;
        $salud->inscrito_id = $request->inscrito_id;
        $salud->descripcion = $request->descripcion;
        $salud->tratamiento = $request->tratamiento;

        $salud->save();

        return redirect()->route('salud.index');

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
        $salud = ServSalud::find($id);

        return view('salud.edit', compact('salud', 'id'));

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
        $salud = ServSalud::find($id);
        $salud->descripcion = $request->descripcion;
        $salud->tratamiento = $request->tratamiento;

        $salud->save();

        return redirect()->route('salud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $salud = ServSalud::find($id);

        $salud->delete();

        return redirect()->route('salud.index');
    }
}
