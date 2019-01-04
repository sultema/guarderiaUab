<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Auth;
use App\Inscrito;
use App\Educadora;
use App\ServSalud;
use App\ServSicologico;
use App\ServNutricion;
//use Illuminate\Support\Facades\Auth;

class EstadisticaController extends Controller
{
    
    public function generales(Request $request)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles(['administrador','secretaria']);

            $desde = date($request->desde);
            $hasta = date($request->hasta);
            $inscritos = Inscrito::whereBetween('fecha',[$desde,$hasta])->get();
            $salud = ServSalud::whereBetween('fecha',[$desde,$hasta])->get();
            $sico = ServSicologico::whereBetween('fecha',[$desde,$hasta])->get();
            $nutri = ServNutricion::whereBetween('fecha',[$desde,$hasta])->get();
            $cantins = $inscritos->count();
            $cantsalud = $salud->count();
            $cantsico = $sico->count();
            $cantnut = $nutri->count();

            $mensaje = "acceso concedido";

            return view('estadisticas.generales', compact('cantins','cantsalud', 'cantsico', 'cantnut', 'mensaje'));
        }else
        {
            $mensaje = "Usuario No Auntenticado!";
            return View('estadisticas.generales', compact('mensaje'));
        }


       
    }
}
