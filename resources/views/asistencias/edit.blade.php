@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR ASISTENCIA PARA : {{$asistencia->inscrito->infante->nombres}} {{$asistencia->inscrito->infante->apaterno}} {{$asistencia->inscrito->infante->amaterno}} </h3>
        </div>
        <div class="box-body">
        <form action="{{ action('AsistenciaController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
                <label for="horaingreso" class="col-sm-2 control-label">Hora de Ingreso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="horaingreso" name="horaingreso" value="{{ $asistencia->horaingreso }}"data-inputmask='"mask": "99:99"' data-mask>
                </div>
            </div> 
            <div class="form-group">
                <label for="horasalida" class="col-sm-2 control-label">Hora de Salida</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="horasalida" name="horasalida" value="{{ $asistencia->horasalida }}"data-inputmask='"mask": "99:99"' data-mask>
                </div>
            </div> 
             

        </div>
        <div class="box-footer">
        <a href="{{ url('/asistencias/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection