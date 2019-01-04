@extends('layout')

@section('content')

@if(Auth::check())
<div class="box">
       <div class="box-header">
            <h3 class="box-title">SERVICIOS SICOLOGICOS</h3>
        </div>
       <div class="box-tools">
            <a href="{{ url('/sicologicos/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
       </div>
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Fecha</th><th>Infante</th><th>Grupo</th><th>Descripcion</th><th>Recomendaciones</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($sicologicos as $sicologico)
                    <tr>
                        <td>{{$sicologico->fecha}}</td>
                        <td>{{$sicologico->inscrito->infante->nombres}} {{$sicologico->inscrito->infante->apaterno}} {{$sicologico->inscrito->infante->amaterno}}</td>
                        <td>{{$sicologico->inscrito->grupo->nombre}}</td>
                        <td>{{$sicologico->descripcion}}</td>
                        <td>{{$sicologico->recomendaciones}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('sicologicos.edit',$sicologico->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
                        <td>
                            <form action="{{action('SicologicosController@destroy', $sicologico['id'])}}" method="post">
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
<div class="col-md-6">
    <div class="callout callout-warning">
                <h4>{{$mensaje}}!</h4>
                <p>Por favor inicie sesión con un usuario con el rol autorizado para esta funcionalidad.</p>
    </div>
    </div>
@endif


@endsection