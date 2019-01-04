@extends('layout')

@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVO INFANTE</h3>
        </div>
        <form action="{{ route('inscritos.store') }}" role="form" class="form form-horizontal" method="POST">
        <div class="box-body">
        @csrf

            <div class="form-group">
                <label for="infante_id" class="col-sm-2 control-label">Infantes</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="infante_id">
                        @foreach($infantes as $infante)
                        <option value="{{$infante->id}}">{{ $infante->nombres }} {{$infante->apaterno}} {{$infante->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div> 
            <div class="form-group">
                <label for="grupo_id" class="col-sm-2 control-label">Grupos</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="grupo_id">
                        @foreach($grupos as $grupo)
                        <option value="{{$grupo->id}}">{{ $grupo->nombre }}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div> 

            <div class="form-group">
                <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones">
                </div>
            </div> 
            
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/inscritos/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>

@endsection