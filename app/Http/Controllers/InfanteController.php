<?php

namespace App\Http\Controllers;

use App\Infante;
use App\Beneficiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class InfanteController extends Controller
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

            $infantes = Infante::all();
             return view('infantes.index',compact('infantes'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('infantes.index', compact('mensaje'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beneficiarios = Beneficiario::all();
        return view('infantes.create', compact('beneficiarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        Storage::disk('public')->put($foto->getFilename().'.'.$extension,  File::get($foto));

        $infante = new Infante();
        $infante->nombres = $request->nombres;
        $infante->apaterno = $request->apaterno;
        $infante->amaterno = $request->amaterno;
        $infante->sexo = $request->sexo;
        $infante->fechanacimiento = date("Y/m/d", strtotime($request->fechanacimiento));
        $infante->beneficiario_id = $request->beneficiario_id;

        $infante->mime = $foto->getClientMimeType();
        $infante->original_filename = $foto->getClientOriginalName();
        $infante->filename = $foto->getFilename().'.'.$extension;

        $infante->save();

        return redirect()->route('infantes.index');

        
        /*return redirect()->route('infantes.index')
            ->with('success', 'Infante creado exitosamente.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infante =Infante::find($id);
        return view('infantes.show', compact('infante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infante = Infante::find($id);
        $beneficiarios = Beneficiario::all();
        return view('infantes.edit',compact('infante','beneficiarios', 'id'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $infante = Infante::find($id);
        $infante->nombres = $request->nombres;
        $infante->apaterno = $request->apaterno;
        $infante->amaterno = $request->amaterno;
        $infante->fechanacimiento = $request->fechanacimiento;
        $infante->sexo = $request->sexo;
        $infante->beneficiario_id = $request->beneficiario_id;

        $infante->save();
      //  $infante->save();

        return redirect()->route('infantes.index');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infante $infante)
    {
        //
        $infante->delete();

        return redirect()->route('infantes.index')
                ->with('success', 'Ifante eliminado exitosamente.');
    }
}
