@extends('layout')

@section('content')

@if(Auth::check())
<div class="box">
        <div class="box-header">
            <h3 class="box-title">APODERADOS</h3>          
        </div>
        <div class="box-tools">
            <a href="{{ url('/apoderados/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
        </div>
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th><th>Paterno</th><th>Materno</th><th>CI</th><th>Infantes</th><th class="acc">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($apoderados as $apoderado)
                    <tr>
                        <td>{{$apoderado->nombres}}</td>
                        <td>{{$apoderado->apaterno}}</td>
                        <td>{{$apoderado->amaterno}}</td>
                        <td>{{$apoderado->ci}}</td>
                        <td>
                        <ul>
                            @foreach($apoderado->infantes as $infante)
                            <li>{{$infante->nombres}}  <a href="{{action('ApoderadoController@quitarinfante', [ $infante->id, $apoderado->id])}}"><i class="fa fa-fw fa-trash-o"></i></a></li>   
                            @endforeach                           
                            </ul>
                        </td>
                        <td class="acc"><a href="{{ route('apoderados.edit',$apoderado->id) }}" class="btn btn-default"><i class="fa fa-fw fa-pencil"></i></a>
                            <a href="{{ route('apoderados.show',$apoderado->id) }}" class="btn btn-default"><i class="fa fa-fw fa-folder-open"></i></a></td>
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

<!-- page script -->
<script>
  $(function () {
   
    $('#benefitab').DataTable({
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