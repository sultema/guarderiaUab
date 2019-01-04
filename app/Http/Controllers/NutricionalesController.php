<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Inscrito;
use App\ServNutricion;
use Auth;

class NutricionalesController extends Controller
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
            $request->user()->authorizeRoles('nutricionista');

            $nutricionales = ServNutricion::all();

            return view('nutricionales.index', compact('nutricionales'));

        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('nutricionales.index', compact('mensaje'));
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

        return view('nutricionales.create', compact('inscritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nutricion = new ServNutricion();
        $nutricion->fecha = new DateTime();
        $nutricion->inscrito_id = $request->inscrito_id;
        $nutricion->descripcion = $request->descripcion;
        $nutricion->save();

         return redirect()->route('nutricionales.index');
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
        $nutricional = ServNutricion::find($id);
        
        return view('nutricionales.edit', compact('nutricional', 'id'));
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
        $nutricional=ServNutricion::find($id);
        $nutricional->descripcion = $request->descripcion;

        $nutricional->save();

        return redirect()->route('nutricionales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nutricional = ServNutricion::find($id);

        $nutricional->delete();

        return redirect()->route('nutricionales.index');
    }
}
