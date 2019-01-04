<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Educadora;
use Auth;

class EducadoraController extends Controller
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
            
            $educadoras = Educadora::all();

            return view('educadoras.index', compact('educadoras'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('educadoras.index', compact('mensaje'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('educadoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $educadora = new Educadora();
        $educadora->nombres = $request->nombres;
        $educadora->apaterno = $request->apaterno;
        $educadora->amaterno = $request->amaterno;
        
        $educadora->save();

        return redirect()->route('educadoras.index');
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
        $educadora = Educadora::find($id);

        return view('educadoras.edit',compact('educadora', 'id'));
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
        $educadora = Educadora::find($id);
        $educadora->nombres = $request->nombres;
        $educadora->apaterno = $request->apaterno;
        $educadora->amaterno = $request->amaterno;
        
        $educadora->save();
        return redirect()->route('educadoras.index');
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
