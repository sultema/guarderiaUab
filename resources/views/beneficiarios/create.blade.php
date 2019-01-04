@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVO BENEFICIARIO</h3>
        </div>
        <form action="{{ route('beneficiarios.store') }}" role="form" class="form form-horizontal" method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="ci" class="col-sm-2 control-label">Carnet de Identidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de Identidad">
                </div>
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                </div>
            </div>
            <div class="form-group">
                <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                </div>
            </div>
            <div class="form-group">
                <label for="ru" class="col-sm-2 control-label">RU</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ru" name="ru" placeholder="RU">
                </div>
            </div>
            <div class="form-group">
                <label for="carrera" class="col-sm-2 control-label">Carrera</label>
                <div class="col-sm-10">
                   
                    <select name="carrera" class="form-control">
                        <option value="Ingenieria Civil">Ingenieria Civil</option>
                        <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
                        <option value="Administracion de Empresas">Administracion de Empresas</option>
                        <option value="Turismo">Turismo</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="foto" class="col-sm-2 control-label">Fotagrafía</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
            </div> 
        </div>
        
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
        </div>
        </form>
    </div>    
@endsection 