@extends('layout')

@section('content')

@if(Auth::check())
<div class="box">
        <div class="box-header">
            <h3 class="box-title">HISTORIA DE EVALUACION ACADEMICA - {{strtoupper($nombreInfante)}} </h3>
            <div class="box-body">
            @foreach($inscripciones as $inscripcion)
                <div class="callout callout-info">
                    <h4>GESTION {{ date("Y", strtotime($inscripcion->fecha)) }}</h4>
                   
                </div>
                <table id="tab1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Fecha</th><th>Sociendad y Comunidad</th><th>Ciencia</th><th>Vida y Tierra</th><th>Cosmos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inscripcion->evaluaciones as $evaluacion)
                        <tr>
                            <td>{{$evaluacion->fecha}}</td><td>{{$evaluacion->comunidadsociedad}}</td><td>{{$evaluacion->ciencia}}</td><td>{{$evaluacion->vidatierra}}</td><td>{{$evaluacion->cosmos}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
            </div>
        </div>
    </div>
    <div style="text-align:center">
      	<button id="btnimp" type="button" onclick="print()" class="btn btn-default btn-lg">
  			<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir
		</button>
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