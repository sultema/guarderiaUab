@extends('layout')

@section('content')
<div class="box">
        <div class="box-header">
            <h3 class="box-title">REGISTRAR NUEVA EVALUACION</h3>
        </div>
        <form action="{{ route('evaluaciones.store') }}" role="form" class="form form-horizontal" method="POST">
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
                <label for="comunidadsociedad" class="col-sm-2 control-label">Comunidad y Sociedad</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="comunidadsociedad" name="comunidadsociedad" placeholder="Escriba la evaluacion para comunidad y sociedad aquí..."></textarea>
                </div>
            </div> 

            <div class="form-group">
                <label for="ciencia" class="col-sm-2 control-label">Ciencia</label>
                <div class="col-sm-10">
                <textarea rows="4" class="form-control" id="ciencia" name="ciencia" placeholder="Escriba la evaluacion para ciencia aquí..."></textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="vidatierra" class="col-sm-2 control-label">Vida y Tierra</label>
                <div class="col-sm-10">
                <textarea rows="4" class="form-control" id="vidatierra" name="vidatierra" placeholder="Escriba la evaluacion para vida y tierra aquí..."></textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="cosmos" class="col-sm-2 control-label">Cosmos</label>
                <div class="col-sm-10">
                <textarea rows="4" class="form-control" id="cosmos" name="cosmos" placeholder="Escriba la evaluacion para cosmos aquí..."></textarea>
                </div>
            </div> 
        </div>
        <div class="box-footer">
        <div class="box-tools">
                <a href="{{ url('/evaluaciones/')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left "></i> Atras</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>

@endsection