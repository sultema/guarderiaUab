@extends('layout')

@section('content')

@if(Auth::check())
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                ESTADISTICAS GENERALES 
            </h3>
        </div>
        <div class="box-tools pull-right">
        <form action="{{ action('EstadisticaController@generales') }}" role="form" class="form form-horizontal" method="GET">
        @csrf
            <div class="col-md-5">
            <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name ="desde" value="2018/01/01" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
            </div>

            <div class="col-md-5">
            <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="hasta" value="2018/12/31" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> </button>
            </div>
        </form>
        </div>
        <div class="box-body">
            <table id="tab1" class="table">
                <tr>
                    <th>inscritos</th>
                    <th>Salud</th>
                    <th>Sicologico</th>
                    <th>Nutricional</th>
                </tr>
                <tr>
                    <td>{{$cantins}}</td><td>{{$cantsalud}}</td><td>{{$cantsico}}</td><td>{{$cantnut}}</td>
                </tr>
            </table>
        </div>
        <div class="box-footer">
            
        </div>
    </div>

@else
    <div class="col-md-6">
    <div class="callout callout-warning">
                <h4>{{$mensaje}}!</h4>
                <p>Por favor inicie sesión con un usuario con el rol autorizado para esta funcionalidad.</p>
    </div>
    </div>
@endif
    
  
@endsection