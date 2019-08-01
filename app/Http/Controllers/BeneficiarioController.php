<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficiario;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class BeneficiarioController extends Controller
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
            $request->user()->authorizeRoles(['administrador','bienestar']);

            $beneficiarios = Beneficiario::all();
            return view('beneficiarios.index', compact('beneficiarios'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('beneficiarios.index', compact('mensaje'));
        }


        
    }

    public function create()
    {
        return view('beneficiarios.create');
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

        $beneficiario = new Beneficiario();
        $beneficiario->nombres = $request->nombres;
        $beneficiario->apaterno = $request->apaterno;
        $beneficiario->amaterno = $request->amaterno;
        $beneficiario->ci = $request->ci;
        $beneficiario->direccion = $request->direccion;
        $beneficiario->telefono = $request->telefono;
        $beneficiario->ru = $request->ru;
        $beneficiario->carrera = $request->carrera;

        $beneficiario->mime = $foto->getClientMimeType();
        $beneficiario->original_filename = $foto->getClientOriginalName();
        $beneficiario->filename = $foto->getFilename().'.'.$extension;

        $beneficiario->save();

        return redirect()->route('beneficiarios.index');
    }

   public function edit(int $id)
   {
       $beneficiario = Beneficiario::find($id);

        return view('beneficiarios.edit',compact('beneficiario', 'id'));
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
        $beneficiario = Beneficiario::find($id);
        $beneficiario->nombres = $request->nombres;
        $beneficiario->apaterno = $request->apaterno;
        $beneficiario->amaterno = $request->amaterno;
        $beneficiario->ci = $request->ci; 
        $beneficiario->direccion = $request->direccion;
        $beneficiario->telefono = $request->telefono;
        $beneficiario->ru = $request->ru;
        $beneficiario->carrera = $request->carrera;

        $beneficiario->save();
        return redirect()->route('beneficiarios.index');

    }
   

    public function show($id)
    {
        $beneficiario =Beneficiario::find($id);
        return view('beneficiarios.show', compact('beneficiario'));
    }
}
