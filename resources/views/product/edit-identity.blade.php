@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
			{!! Form::model($identity, ['route' => ['identity.update', $identity],'method' =>'patch', 'files' => true])!!}
					@include('product._identity_form', ['model' => $identity])
			{!! Form::close() !!}	   
        </div>    
    </div>
    </div>
    </div>
    
</div>
@endsection