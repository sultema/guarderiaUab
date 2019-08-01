@extends('layout')


@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVO INFANTE</h3>
        </div>
        <form action="{{ route('infantes.store') }}" role="form" class="form form-horizontal" method="POST" enctype="multipart/form-data" >
        <div class="box-body">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="beneficiario_id" class="col-sm-2 control-label">Beneficirios</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="beneficiario_id">
                        @foreach($beneficiarios as $beneficiario)
                        <option value="{{$beneficiario->id}}">{{ $beneficiario->nombres }} {{$beneficiario->apaterno}} {{$beneficiario->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div> 
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="nombres" 
                   input-datamask="'alias':'ip'" placeholder="Nombres" data-mask>
                </div>
            </div> 
            <div class="form-group">
                <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Apellido Paterno">
                </div>
            </div>
            <div class="form-group">
                <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Apellido Materno">
                </div>
            </div>
            <div class="form-group">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                   
                    <select name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="gruposanguineo" class="col-sm-2 control-label">Grupo Sanguineo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gruposanguineo" name="gruposanguineo" placeholder="Grupo Sanguineo">
                </div>
            </div>
            <div class="form-group">
                <label  for="fechanacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="fechanacimiento" id="datemask">
                </div>
            </div>
            <div class="form-group">
                <label for="foto" class="col-sm-2 control-label">Fotagrafía</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
            </div>
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/infantes/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>



@endsection