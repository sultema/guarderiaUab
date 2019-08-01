@extends('layout')

@section('content')

<div class="row">
  <div class="col-xs-6 col-md-3">
    <img data-src=holder.js/140x140 class=img-thumbnail src="{{url('uploads/'.$infante->filename)}}" alt="{{$infante->filename}}">
  </div>
  <div class="col-xs-6 col-md-3">
    <div class="box">
        <div class="boxheader"><h3 class="boxtitle">{{ strtoupper($infante->nombres." ".$infante->apaterno." ".$infante->amaterno) }}</h3></div>
        <div class="box-body">
            <table class="table">
                <tr>
                    <th>FECHA DE NACIMIENTO </th><td>{{$infante->fechanacimiento}}</td>
                </tr>
                <tr>
                    <th>EDAD </th><td>{{$infante->edad()}} AÑOS</td>
                </tr>
                <tr>
                    <th>SEXO </th><td>{{$infante->sexo}} </td>
                </tr>
                <tr>
                    <th>GRUPO SANGUINEO </th><td>{{$infante->gruposanguineo}} </td>
                </tr>
                <tr>
                    <th>BENEFICIARIO </th><td>{{$infante->beneficiario->nombres." ".$infante->beneficiario->apaterno." ".$infante->beneficiario->amaterno}} </td>
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