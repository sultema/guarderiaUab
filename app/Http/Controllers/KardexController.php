<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
Use App\Infante;
Use App\Inscrito;
Use App\Educadora;
use App\Grupo;
use Auth;

class KardexController extends Controller
{
    //
    public function listarinfantes(Request $request)
    {
        $usuario = Auth::check();

        if($usuario)
        {
            $request->user()->authorizeRoles(['medico','nutricionista', 'sicologo', 'educadora']);
            $infantes = Infante::all();
            return view('kardex.listarinfantes', compact('infantes'));

        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('kardex.listarinfantes', compact('mensaje'));
        }
        
    }
    public function listarinscripciones($id)
    {

    }
    public function historiaclinica(Request $request, $id)
    {
        $usuario = Auth::check();

        if($usuario)
        {
            $request->user()->authorizeRoles('medico');

            $inscripciones = Inscrito::where('infante_id', $id)->get();
            $infante = Infante::find($id);
            $nombreInfante = $infante->nombres . " " . $infante->apaterno . " " . $infante->amaterno;

            return view('kardex.hce', compact('inscripciones', 'nombreInfante'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('kardex.hce', compact('mensaje'));
        }
        
    }

    public function nutricional(Request $request, $id)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles('nutricionista');

            $inscripciones = Inscrito::where('infante_id', $id)->get();
            $infante = Infante::find($id);
            $nombreInfante = $infante->nombres . " " . $infante->apaterno . " " . $infante->amaterno;

            return view('kardex.nutricion', compact('inscripciones', 'nombreInfante'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('kardex.nutricion', compact('mensaje'));
        }
        
    }

    public function sicologico(Request $request, $id)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles('sicologo');
            $inscripciones = Inscrito::where('infante_id', $id)->get();
            $infante = Infante::find($id);
            $nombreInfante = $infante->nombres . " " . $infante->apaterno . " " . $infante->amaterno;
    
            return view('kardex.sicologico', compact('inscripciones', 'nombreInfante'));   
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('kardex.sicologico', compact('mensaje'));
        }
       
    }

    public function evaluacion(Request $request,$id)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles('educadora');
            $inscripciones = Inscrito::where('infante_id', $id)->get();
            $infante = Infante::find($id);
            $nombreInfante = $infante->nombres . " " . $infante->apaterno . " " . $infante->amaterno;

            return view('kardex.evaluacion', compact('inscripciones', 'nombreInfante')); 
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('kardex.evaluacion', compact('mensaje'));
        }
          
    }

    public function listareducadoras(Request $request)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles(['administrador', 'secretaria']);
            $educadoras = Educadora::all();

            return view('kardex.listareducadoras', compact('educadoras'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('kardex.listareducadoras', compact('mensaje'));
        }
        
    }

    public function grupos($id)
    {
        $educadora = Educadora::find($id);
        $nombreEducadora = $educadora->nombres." ".$educadora->apaterno." ".$educadora->amaterno;
        $grupos = Grupo::where('educadora_id',$id)->get();

        return view('kardex.grupos', compact('grupos','nombreEducadora'));
    }
}
