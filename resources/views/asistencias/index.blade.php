@extends('layout')

@section('content')
@if(Auth::check())
<div class="box">
       <div class="box-header">
            <h3 class="box-title">ASISTENCIAS</h3>
        </div>
       <div class="box-tools">
            <a href="{{ url('/asistencias/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
       </div>
        <div class="box-body">
            <table id="dtasistencias" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Fecha</th><th>Infante</th><th>Grupo</th><th>Ingreso</th><th>Salida</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($asistencias as $asistencia)
                    <tr>
                        <td>{{$asistencia->fecha}}</td>
                        <td>{{$asistencia->inscrito->infante->nombres}} {{$asistencia->inscrito->infante->apaterno}} {{$asistencia->inscrito->infante->amaterno}}</td>
                        <td>{{$asistencia->inscrito->grupo->nombre}}</td>
                        <td>{{$asistencia->horaingreso}}</td>
                        <td>{{$asistencia->horasalida}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('asistencias.edit',$asistencia->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
                        <td>
                        <!--<form action="{{action('AsistenciaController@destroy', $asistencia['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-default" type="submit"><i class="fa fa-trash"></i></button>
                            </form>-->
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

    <script>
  $(function () {
    $('#example1').DataTable()
    $('#dtasistencia').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection