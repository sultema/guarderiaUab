@extends('layout')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">EDUCADORAS</h3><br>
        </div>
        <div class="box-tools">
            <a href="{{ url('/educadoras/create')}}" class="btn btn-default">Nuevo <i class="fa fa-fw fa-plus-square"></i></a>
        </div>
        <div class="box-body">
            <table id="tab1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th><th>Paterno</th><th>Materno</th><<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($educadoras as $educadora)
                    <tr>
                        <td>{{$educadora->nombres}}</td>
                        <td>{{$educadora->apaterno}}</td>
                        <td>{{$educadora->amaterno}}</td>
                        
                        <td><a href="{{ route('educadoras.edit',$educadora->id) }}" class="btn btn-default"><i class="fa fa-fw fa-pencil"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

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