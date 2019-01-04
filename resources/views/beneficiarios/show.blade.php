@extends('layout')

@section('content')

<div class="row">
  <div class="col-xs-4 col-md-3">
    <img data-src=holder.js/140x140 class=img-thumbnail src="{{url('uploads/'.$beneficiario->filename)}}" alt="{{$beneficiario->filename}}">
  </div>
  <div class="col-xs-8 col-md-3">
    <div class="box">
        <div class="boxheader"><h3 class="boxtitle">{{ strtoupper($beneficiario->nombres." ".$beneficiario->apaterno." ".$beneficiario->amaterno) }}</h3></div>
        <div class="box-body">
            <table class="table">
                <tr>
                    <th>DIRECCION </th><td>{{$beneficiario->direccion}} </td>
                </tr>
                <tr>
                    <th>TELEFONO </th><td>{{$beneficiario->telefono}} </td>
                </tr>
                <tr>
                    <th>RU </th><td>{{$beneficiario->ru}} </td>
                </tr>
                <tr>
                    <th>CARRERA </th><td>{{$beneficiario->carrera}} </td>
                </tr>
                <tr>
                    <th>
                    PADRE / TUTOR DE:
                    </th>
                    <td>
                        <ul>
                            @foreach($beneficiario->infantes as $infante)
                                <li>{{ $infante->nombres }} {{$infante->apaterno}}  {{$infante->amaterno}}</li>
                            @endforeach
            
                        </ul>
                    </td>
                </tr>
            </table>

            
        </div>
    </div>
  </div>
  
</div>
<div style="text-align:center">
      	<button id="btnimp" type="button" onclick="print()" class="btn btn-default btn-lg">
  			<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir
		</button>
	</div>	
@endsection