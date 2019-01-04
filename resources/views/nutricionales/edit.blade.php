@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR SERVICIO NUTRICIONAL PARA : {{$nutricional->inscrito->infante->nombres}} {{$nutricional->inscrito->infante->apaterno}} {{$nutricional->inscrito->infante->amaterno}} </h3>
        </div>
        <div class="box-body">
        <form action="{{ action('NutricionalesController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
                <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $nutricional->descripcion }}">
                </div>
            </div> 
        </div>
        <div class="box-footer">
        <a href="{{ url('/nutricionales/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection