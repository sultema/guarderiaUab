@extends('layout')

@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVO SERVICIO NUTRICIONAL</h3>
        </div>
        <form action="{{ route('nutricionales.store') }}" role="form" class="form form-horizontal" method="POST">
        <div class="box-body">
        @csrf

            <div class="form-group">
                <label for="inscrito_id" class="col-sm-2 control-label">Inscrito</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="inscrito_id">
                        @foreach($inscritos as $inscrito)
                        <option value="{{$inscrito->id}}">{{ $inscrito->infante->nombres }} {{$inscrito->infante->apaterno}} {{$inscrito->infante->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div> 
            
            <div class="form-group">
                <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" >
                </div>
            </div> 
            
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/nutricionales/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>

@endsection