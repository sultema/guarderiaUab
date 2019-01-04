<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Auth;

class UsuarioController extends Controller
{
    public function listarUsuarios(Request $request)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $request->user()->authorizeRoles(['administrador','secretaria']);

            $usuarios = User::all();

            return view('usuarios.listarusuarios', compact('usuarios'));
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('usuarios.index', compact('mensaje'));
        }
        
    }

    public function asignarrol($id)
    {
        $usuario = User::find($id);
        $roles = Role::all();

        return view('usuarios.asignarrol', compact('usuario', 'roles'));
    }

    public function guardarrol(Request $request)
    {
        $rol = Role::find($request->rol_id);   
        $usuario = User::find($request->usuario_id);

        $usuario->roles()->attach($rol);

        return redirect()->action('UsuarioController@listarUsuarios');
    }
    public function quitarrol($usuario_id, $rol_id)
    {
        $usuario = Auth::check();
        if($usuario)
        {
            $user = User::find($usuario_id);
            DB::table('role_user')->where('role_id','=', $rol_id)->where('user_id','=', $usuario_id)->delete();
    
            return redirect()->action('UsuarioController@listarUsuarios');
        }else{
            $mensaje = "Usuario No Auntenticado!";
            return View('grupos.index', compact('mensaje'));
        }      
    }
}
