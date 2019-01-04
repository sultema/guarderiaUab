@extends('layout')

@section('content')

@if(Auth::check())
<div class="box">
       <div class="box-header">
            <h3 class="box-title">KARDEX DE INFANTES DE LA GUARDERIA</h3>
        </div>
       
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th><th>Paterno</th><th>Materno</th><th>Sexo</th><th>Fecha de Nacimiento</th><th>Edad</th><th>Beneficiario</th><<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($infantes as $infante)
                    <tr>
                        <td>{{$infante->nombres}}</td>
                        <td>{{$infante->apaterno}}</td>
                        <td>{{$infante->amaterno}}</td>
                        <td>{{$infante->sexo}}</td>
                        <td>{{$infante->fechanacimiento}}</td>  
                        <td>{{$infante->edad()}}</td>  
                        <td>{{$infante->beneficiario->nombres}} {{$infante->beneficiario->apaterno}} {{$infante->beneficiario->amaterno}}</td>                        
                        <td>
                            <a href="{{ action('KardexController@historiaclinica', $infante->id) }}" class="btn btn-default"><i class="fa fa-fw fa-stethoscope"></i></a>
                            <a href="{{ action('KardexController@nutricional', $infante->id) }}" class="btn btn-default"><i class="fa fa-fw fa-cutlery"></i></a>
                            <a href="{{ action('KardexController@sicologico', $infante->id) }}" class="btn btn-default"><i class="fa fa-fw fa-frown-o"></i></a>
                            <a href="{{ action('KardexController@evaluacion', $infante->id) }}" class="btn btn-default"><i class="fa fa-fw fa-book"></i></a>
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