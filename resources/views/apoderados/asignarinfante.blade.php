@extends('layout')

@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">ASIGNAR INFANTE A APODERADO</h3>
        </div>
        <form action="{{ action('ApoderadoController@guardarinfante') }}" role="form" class="form form-horizontal" method="POST"  >
        <div class="box-body">
       <!-- <input type = "hidden" name="_method" value ="PUT"> -->
        @csrf
            <div class="form-group">
                <label for="infante_id" class="col-sm-2 control-label">Infantes</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="infante_id">
                        @foreach($infantes as $infante)
                        <option value="{{$infante->id}}">{{ $infante->nombres }} {{ $infante->apaterno }} {{ $infante->amaterno }}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div>
            
                    <input type="hidden" class="form-control" id="nombres" name="apoderado_id" value="{{ $apoderado->id }}">
              
           
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="name" value="{{ $apoderado->nombres }}" readonly="true">
                </div>
            </div>  
            
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/apoderados')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>
@endsection