@extends('layout')

@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVA ASISTENCIA</h3>
        </div>
        <form action="{{ route('asistencias.store') }}" role="form" class="form form-horizontal" method="POST">
        <div class="box-body">
        @csrf

            <div class="form-group">
                <label for="infante_id" class="col-sm-2 control-label">Inscrito</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="inscrito_id">
                        @foreach($inscritos as $inscrito)
                        <option value="{{$inscrito->id}}">{{ $inscrito->infante->nombres }} {{$inscrito->infante->apaterno}} {{$inscrito->infante->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div> 
            
            <div class="form-group">
                <label for="horaingreso" class="col-sm-2 control-label">Hora de Ingreso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="horaingreso" name="horaingreso" data-inputmask='"mask": "99:99"' data-mask>
                </div>
            </div> 
            <div class="form-group">
                <label for="horasalida" class="col-sm-2 control-label">Hora de Salida</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="horasalida" name="horasalida" data-inputmask='"mask": "99:99"' data-mask>
                </div>
            </div> 
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/asistencias/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>

@endsection