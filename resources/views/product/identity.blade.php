@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-2">
                <h3>Data Indentitas Buku</h3>
            <a href="{{ route('identity.create') }}" class="btn btn-primary float-right">Create</a>
            </div>
            
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <td>Identitas Buku</td>
                <td>Aksi</td>
            </tr>
            </thead>
            <tbody>
            @foreach($identityBuku as $identity)
            <tr>
                <td>{{ $identity->nama_identity }}</td>
                <td>
                {!! Form::model($identity, ['route' => ['identity.destroy', $identity], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                    <a class="btn btn-warning" href="{{ route('identity.edit', $identity->id) }}">Edit</a>
                    {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                {!! Form::close()!!}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
    </div>
    
</div>
@endsection