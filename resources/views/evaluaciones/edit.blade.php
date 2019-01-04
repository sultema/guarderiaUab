@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR EVALUACION PARA : {{$evaluacion->inscrito->infante->nombres}} {{$evaluacion->inscrito->infante->apaterno}} {{$evaluacion->inscrito->infante->amaterno}} </h3>
        </div>
        <div class="box-body">
        <form action="{{ action('EvaluacionController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
            <label for="comunidadsociedad" class="col-sm-2 control-label">Comunidad y Sociedad</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="comunidadsociedad" name="comunidadsociedad" >{{ $evaluacion->comunidadsociedad }}</textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="ciencia" class="col-sm-2 control-label">Ciencia</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="ciencia" name="ciencia">{{ $evaluacion->ciencia }}</textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="vidatierra" class="col-sm-2 control-label">Vida y Tierra</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="vidatierra" name="vidatierra">{{ $evaluacion->vidatierra }}</textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="cosmos" class="col-sm-2 control-label">Cosmos</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="cosmos" name="cosmos">{{ $evaluacion->cosmos }}</textarea>
                </div>
            </div> 
        </div>
        <div class="box-footer">
        <a href="{{ url('/evaluaciones/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection