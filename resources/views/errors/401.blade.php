@extends('layout')

@section('content')
    <div class="col-md-6">
        <div class="callout callout-warning">
                <h4>{{$exception->getMessage()}}!</h4>
                <p>Por favor inicie sesión con un usuario con el rol autorizado para esta funcionalidad.</p>
        </div>
    </div>
    
@endsection