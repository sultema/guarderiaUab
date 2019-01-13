@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">   </div>

                <div class="card-body">
                
                   <h3>&nbsp;&nbsp;&nbsp;&nbsp;welcome {{Auth::user()->name}},</h3>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
