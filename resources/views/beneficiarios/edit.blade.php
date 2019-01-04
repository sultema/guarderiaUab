@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR BENEFICIARIO</h3>
        </div>
        <div class="box-body">
        <form action="{{ action('BeneficiarioController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $beneficiario->nombres }}">
                </div>
            </div> 
            <div class="form-group">
                <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" value="{{ $beneficiario->apaterno }}">
                </div>
            </div>
            <div class="form-group">
                <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" value="{{ $beneficiario->amaterno }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ci" class="col-sm-2 control-label">Carnet de Identidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ci" name="ci" value="{{ $beneficiario->ci }}">
                </div>
            </div> 
        </div>
        <div class="form-group">
                <label for="direccion" class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$beneficiario->direccion}}">
                </div>
        </div>
        <div class="form-group">
                <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$beneficiario->telefono}}">
                </div>
        </div>
        <div class="form-group">
                <label for="ru" class="col-sm-2 control-label">RU</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ru" name="ru" value="{{$beneficiario->ru}}">
                </div>
        </div>
        <div class="form-group">
                <label for="carrera" class="col-sm-2 control-label">Carrera</label>
                <div class="col-sm-10">
                   
                    <select name="carrera" class="form-control">
                        <option value="Ingenieria Civil" @if($beneficiario->carrera== "Ingenieria Civil") selected='selected' @endif >Ingenieria Civil</option>
                        <option value="Ingenieria de Sistemas" @if($beneficiario->carrera== "Ingenieria de Sistemas") selected='selected' @endif >Ingenieria de Sistemas</option>
                        <option value="Administracion de Empresas" @if($beneficiario->carrera== "Administracion de Empresas") selected='selected' @endif >Administracion de Empresas</option>
                        <option value="Turismo" @if($beneficiario->carrera== "Turismo") selected='selected' @endif >Turismo</option>
                    </select>
                </div>
            </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
        </div>
        </form>
        </div>
       
    </div>
@endsection