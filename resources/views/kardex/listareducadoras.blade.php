@extends('layout')

@section('content')

@if(Auth::check())
<div class="box">
       <div class="box-header">
            <h3 class="box-title">KARDEX DE EDCUADORAS DE LA GUARDERIA</h3>
        </div>
       
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th><th>Paterno</th><th>Materno</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($educadoras as $educadora)
                    <tr>
                        <td>{{$educadora->nombres}}</td>
                        <td>{{$educadora->apaterno}}</td>
                        <td>{{$educadora->amaterno}}</td>
                                        
                        <td>
                            <a href="{{ action('KardexController@grupos', $educadora->id) }}" class="btn btn-default"><i class="fa fa-fw fa-group"></i></a>
                            
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