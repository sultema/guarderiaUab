@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR INSCRITO </h3>
        </div>
        <div class="box-body">
        <form action="{{ action('InscritoController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">       
                <label for="infante_id" class="col-sm-2 control-label">Infantes</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="infante_id">
                        @foreach($infantes as $infante)
                        <option value="{{$infante->id}}" @if($infante->id==$inscrito->infante_id) selected='selected' @endif > {{ $infante->nombres }} {{$infante->apaterno}} {{$infante->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div>  

            <div class="form-group">       
                <label for="grupo_id" class="col-sm-2 control-label">Grupos</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="grupo_id">
                        @foreach($grupos as $grupo)
                        <option value="{{$grupo->id}}" @if($grupo->id==$inscrito->grupo_id) selected='selected' @endif > {{ $grupo->nombre }}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div>  

            </div> 
            <div class="form-group">
                <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="observaciones" name="observaciones" value="{{ $inscrito->observaciones }}">
                </div>
            </div> 
           
             

        </div>
        <div class="box-footer">
        <a href="{{ url('/inscritos/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection