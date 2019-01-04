@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR INFANTE </h3>
        </div>
        <div class="box-body">
        <form action="{{ action('InfanteController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
                        
                    <label for="beneficiario_id" class="col-sm-2 control-label">Beneficirios</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="beneficiario_id">
                        @foreach($beneficiarios as $beneficiario)
                        <option value="{{$beneficiario->id}}" @if($beneficiario->id==$infante->beneficiario_id) selected='selected' @endif > {{ $beneficiario->nombres }} {{$beneficiario->apaterno}} {{$beneficiario->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div>  
            </div> 
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $infante->nombres }}">
                </div>
            </div> 
            <div class="form-group">
                <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" value="{{ $infante->apaterno }}">
                </div>
            </div>
            <div class="form-group">
                <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" value="{{ $infante->amaterno }}">
                </div>
            </div>
            <div class="form-group">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                   
                    <select name="sexo" class="form-control">
                        <option value="M" @if($infante->sexo== "M") selected='selected' @endif >Masculino</option>
                        <option value="F" @if($infante->sexo== "F") selected='selected' @endif>Femenino</option>
                    </select>
                </div>
            </div>

             <div class="form-group">
                <label  for="fechanacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" value="{{$infante->fechanacimiento}}" name="fechanacimiento" id="datemask">
                </div>
            </div>

        </div>
        <div class="box-footer">
        <a href="{{ url('/infantes/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection