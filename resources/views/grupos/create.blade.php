@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVO GRUPO</h3>
        </div>
        <form action="{{ route('grupos.store') }}" role="form" class="form form-horizontal" method="POST">
        <div class="box-body">
        @csrf
        <div class="form-group">
                <label for="educadora_id" class="col-sm-2 control-label">Educadoras</label>
                <div class="col-sm-10">
                   
                    <select class="form-control" name="educadora_id">
                        @foreach($educadoras as $educadora)
                        <option value="{{$educadora->id}}">{{ $educadora->nombres }} {{$educadora->apaterno}} {{$educadora->amaterno}}</option>
                        @endforeach
                        
                  </select>
                </div>
            </div> 
            <div class="form-group">
                <label for="anio" class="col-sm-2 control-label">Año (Gestión)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="anio" name="anio" placeholder="Año (Gestión)">
                </div>
            </div> 
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                </div>
            </div> 
            <div class="form-group">
                <label for="turno" class="col-sm-2 control-label">Turno</label>
                <div class="col-sm-10">
                   <!-- <input type="text" class="form-control" id="turno" name="turno" placeholder="Turno"> -->
                    <label>Seleccione</label>
                  <select class="form-control" name="turno">
                    <option value="M">Mañana</option>
                    <option value="T">Tarde</option>
                   
                  </select>
                </div>
                </div>
            </div>
            
            
        </div>
        <div class="box-footer">
        <a href="{{ url('/grupos/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        
        </form>
    </div>    
@endsection 