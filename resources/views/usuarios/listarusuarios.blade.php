@extends('layout')
@section('title', 'Lista de Usuarios')
@section('content')
    @if(Auth::check())
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">USUARIOS</h3>
        </div>
       
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Usuario</th><th>E-Mail</th><th>Roles Asignados</th><<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            <ul>
                            @foreach($usuario->roles as $rol)
                            <li>{{$rol->name}}  <a href="{{action('UsuarioController@quitarrol', [$usuario->id, $rol->id])}}"><i class="fa fa-fw fa-trash-o"></i></a></li>   
                            @endforeach
                                
                            
                            </ul>
                        </td>
                           
                        <td>
                        <a href="{{ action('UsuarioController@asignarrol', $usuario->id) }}" class="btn btn-default"><i class="fa fa-fw fa-plug"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    @else
        <div class="col-md-6">
            <div class="callout callout-warning">
                <h4>{{$mensaje}}!</h4>
                <p>Por favor inicie sesión con un usuario con el rol autorizado para esta funcionalidad.</p>
            </div>
        </div>
    @endif



@endsection