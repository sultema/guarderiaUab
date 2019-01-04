@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR SERVICO DE SALUD PARA : {{$salud->inscrito->infante->nombres}} {{$salud->inscrito->infante->apaterno}} {{$salud->inscrito->infante->amaterno}} </h3>
        </div>
        <div class="box-body">
        <form action="{{ action('SaludController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
            <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="descripcion" name="descripcion" >{{ $salud->descripcion }}</textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="tratamiento" class="col-sm-2 control-label">Recomendaciones</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="tratamiento" name="tratamiento">{{ $salud->tratamiento }}</textarea>
                </div>
            </div> 
        </div>
        <div class="box-footer">
        <a href="{{ url('/salud/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection