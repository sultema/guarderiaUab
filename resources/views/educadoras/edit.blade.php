@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDITAR EDUCADORIA</h3>
        </div>
        <div class="box-body">
        <form action="{{ action('EducadoraController@update', $id) }}" role="form" class="form form-horizontal" method="post">
        <div class="box-body">
        @csrf
        <input type="hidden" name ="_method" value="PATCH">
            <div class="form-group">
                <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $educadora->nombres }}">
                </div>
            </div> 
            <div class="form-group">
                <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" value="{{ $educadora->apaterno }}">
                </div>
            </div>
            <div class="form-group">
                <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" value="{{ $educadora->amaterno }}">
                </div>
            </div>
            
        </div>
        <div class="box-footer">
        <a href="{{ url('/educadoras/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </div>
        </form>
        </div>
        <div class="box-footer">
        
        </div>
    </div>
@endsection