@extends('layout')

@section('content')
@if(Auth::check())
<div class="box">
       <div class="box-header">
            <h3 class="box-title">INSCRITOS</h3>
        </div>
       <div class="box-tools">
            <a href="{{ url('/inscritos/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
       </div>
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Fecha</th><th>Infante</th><th>Grupo</th><th>Observaciones</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($inscritos as $inscrito)
                    <tr>
                        <td>{{$inscrito->fecha}}</td>
                        <td>{{$inscrito->infante->nombres}} {{$inscrito->infante->apaterno}} {{$inscrito->infante->amaterno}}</td>
                        <td>{{$inscrito->grupo->nombre}}</td>
                        <td>{{$inscrito->observaciones}}</td>
                        
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('inscritos.edit',$inscrito->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
                        <td>
                            <form action="{{action('InscritoController@destroy', $inscrito['id'])}}" method="post">
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