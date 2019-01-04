@extends('layout')

@section('content')

@if(Auth::check())
<div class="box">
       <div class="box-header">
            <h3 class="box-title">EVALUACIONES</h3>
        </div>
       <div class="box-tools">
            <a href="{{ url('/evaluaciones/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
       </div>
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Fecha</th><th>Infante</th><th>Grupo</th><th>Comnidad/Sociedad</th><th>Ciencia</th><th>Vida/Tierra</th><th>Cosmos</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($evaluaciones as $evaluacion)
                    <tr>
                        <td>{{$evaluacion->fecha}}</td>
                        <td>{{$evaluacion->inscrito->infante->nombres}} {{$evaluacion->inscrito->infante->apaterno}} {{$evaluacion->inscrito->infante->amaterno}}</td>
                        <td>{{$evaluacion->inscrito->grupo->nombre}}</td>
                        <td>{{$evaluacion->comunidadsociedad}}</td>
                        <td>{{$evaluacion->ciencia}}</td>
                        <td>{{$evaluacion->vidatierra}}</td>
                        <td>{{$evaluacion->cosmos}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('evaluaciones.edit',$evaluacion->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
                        <td>
                            <form action="{{action('EvaluacionController@destroy', $evaluacion['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-default" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
<div class="callout callout-warning">
                <h4>{{$mensaje}}!</h4>
                <p>Por favor inicie sesión con un usuario con el rol autorizado para esta funcionalidad.</p>
    </div>
@endif

   
@endsection