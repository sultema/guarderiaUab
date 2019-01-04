@extends('layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">GRUPOS A CARGO DE LA EDUCADORA - {{strtoupper($nombreEducadora)}} </h3>
            <div class="box-body">
           
                <table id="tab1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Año</th><th>Nombre</th><th>Turno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grupos as $grupo)
                        <tr>
                            <td>{{$grupo->anio}}</td><td>{{$grupo->nombre}}</td><td>{{$grupo->turno}}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
           
            </div>
        </div>
    </div>
@endsection