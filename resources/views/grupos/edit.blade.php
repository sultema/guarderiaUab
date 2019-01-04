@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR GRUPO</h3>
        </div>
        <div class="box-body">
        <form action="{{ action('GrupoController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
                <label for="anio" class="col-sm-2 control-label">Año</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="anio" name="anio" value="{{ $grupo->anio }}">
                </div>
            </div> 
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $grupo->nombre }}">
                </div>
            </div> 
            <div class="form-group">
                <label for="turno" class="col-sm-2 control-label">Turno</label>
                <div class="col-sm-10">
                   
                    <select name="turno" class="form-control">
                        <option value="M" @if($grupo->turno== "M") selected='selected' @endif >Mañana</option>
                        <option value="T" @if($grupo->turno== "T") selected='selected' @endif>Tarde</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                        
                        <label for="educadora_id" class="col-sm-2 control-label">Educadoras</label>
                    <div class="col-sm-10">
                       
                        <select class="form-control" name="educadora_id">
                            @foreach($educadoras as $educadora)
                            <option value="{{$educadora->id}}" @if($educadora->id==$grupo->educadora_id) selected='selected' @endif > {{ $educadora->nombres }} {{$educadora->apaterno}} {{$educadora->amaterno}}</option>
                            @endforeach
                            
                      </select>
                    </div>
                </div>  
            
        </div>
        <div class="box-footer">
        <a href="{{ url('/grupos/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection