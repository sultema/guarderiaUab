@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVA EDUCADORA</h3>
        </div>
        <form action="{{ route('educadoras.store') }}" role="form" class="form form-horizontal" method="POST">
        <div class="box-body">
        @csrf
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
                </div>
            </div> 
            <div class="form-group">
                <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Apellido Paterno">
                </div>
            </div>
            <div class="form-group">
                <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Apellido Materno">
                </div>
            </div>
            
        </div>
        <div class="box-footer">
            <div class="box-tools">
                <a href="{{ url('/educadoras/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        
        </div>
        
        </form>
    </div>    
@endsection 