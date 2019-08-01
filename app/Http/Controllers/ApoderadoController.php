<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apoderado;
use App\Infante;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Auth;

class ApoderadoController extends Controller
{
    //
    public function index(Request $request)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles(['administrador','secretaria']);

            $apoderados = Apoderado::all();
            return view('apoderados.index', compact('apoderados'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('apoderados.index', compact('mensaje'));
        }
    }

    public function create()
    {
        return view('apoderados.create');
    }

    public function store(Request $request)
    {
       // $foto = $request->file('foto');
       // $extension = $foto->getClientOriginalExtension();
       // Storage::disk('public')->put($foto->getFilename().'.'.$extension,  File::get($foto));

        $apoderado = new Apoderado();
        $apoderado->nombres = $request->nombres;
        $apoderado->apaterno = $request->apaterno;
        $apoderado->amaterno = $request->amaterno;
        $apoderado->ci = $request->ci;
        $apoderado->direccion = $request->direccion;
        $apoderado->telefono = $request->telefono;
        

      //  $beneficiario->mime = $foto->getClientMimeType();
      //  $beneficiario->original_filename = $foto->getClientOriginalName();
      //  $beneficiario->filename = $foto->getFilename().'.'.$extension;

        $apoderado->save();

        return redirect()->route('apoderados.index');
    }

    public function edit(int $id)
   {
       $apoderado = Apoderado::find($id);

        return view('apoderados.edit',compact('apoderado', 'id'));
   }

   public function update(Request $request, $id)
    {
        $apoderado = Apoderado::find($id);
        $apoderado->nombres = $request->nombres;
        $apoderado->apaterno = $request->apaterno;
        $apoderado->amaterno = $request->amaterno;
        $apoderado->ci = $request->ci; 
        $apoderado->direccion = $request->direccion;
        $apoderado->telefono = $request->telefono;
        

        $apoderado->save();
        return redirect()->route('apoderados.index');

    }

    public function show($id)
    {
        $apoderado =Apoderado::find($id);
        return view('apoderados.show', compact('apoderado'));
    }

    public function asignarinfante($id)
    {
        $apoderado = Apoderado::find($id);
        $infantes = Infante::all();

        return view('apoderados.asignarinfante', compact('infantes','apoderado'));
    }

    public function guardarinfante(Request $request)
    {
        $infante = Infante::find($request->infante_id);   
        $apoderado = Apoderado::find($request->apoderado_id);

        $apoderado->infantes()->attach($infante);
        

        return redirect()->action('ApoderadoController@index');
    }
    public function quitarinfante( $infante_id, $apoderado_id)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $apoderado = Apoderado::find($apoderado_id);
            DB::table('apoderado_infante')->where('infante_id','=', $infante_id)->where('apoderado_id','=', $apoderado_id)->delete();
    
            return redirect()->action('ApoderadoController@index');
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('apoderados.index', compact('mensaje'));
        }      
    }

    public function listarApoderados(Request $request)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles(['administrador','secretaria']);

            $apoderados = Apoderado::all();
            return view('apoderados.listar', compact('apoderados'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('apoderados.listar', compact('mensaje'));
        }
    }

}
