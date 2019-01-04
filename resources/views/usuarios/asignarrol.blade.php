@extends('layout')

@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">ASIGNAR ROL A USUARIO</h3>
        </div>
        <form action="{{ action('UsuarioController@guardarrol') }}" role="form" class="form form-horizontal" method="POST"  >
        <div class="box-body">
       <!-- <input type = "hidden" name="_method" value ="PUT"> -->
        @csrf
            <div class="form-group">
                <label for="beneficiario_id" class="col-sm-2 control-label">Roles</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="rol_id">
                        @foreach($roles as $rol)
                        <option value="{{$rol->id}}">{{ $rol->descritpion }}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div>
            
                    <input type="hidden" class="form-control" id="nombres" name="usuario_id" value="{{ $usuario->id }}">
              
           
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="name" value="{{ $usuario->name }}" readonly="true">
                </div>
            </div>  
            
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/usuarios')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>
@endsection