@extends('layout')
@section('title', 'Lista de Grupos')

@section('content')
    @if(Auth::check())
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">GRUPOS</h3><br>
            
        </div>
       <div class="box-tools">
            <a href="{{ url('/grupos/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
       </div>
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Año</th><th>Nombre</th><th>Turno</th><th>Educadora</th><<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($grupos as $grupo)
                    <tr>
                        <td>{{$grupo->anio}}</td>
                        <td>{{$grupo->nombre}}</td>
                        <td>{{$grupo->turno}}</td>   
                        <td>{{$grupo->educadora->nombres}} {{$grupo->educadora->apaterno}} {{$grupo->educadora->amaterno}}</td>                    
                        <td><a href="{{ route('grupos.edit',$grupo->id) }}" class="btn btn-default"><i class="fa fa-fw fa-pencil"></i></a></td>
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