@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'identity.store',])!!}
                @include('product._identity_form')
            {!! Form::close() !!}   
        </div>    
    </div>
    </div>
    </div>
    
</div>
@endsection