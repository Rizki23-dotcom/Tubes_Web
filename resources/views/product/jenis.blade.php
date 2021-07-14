@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-2">
                <h3>Data Jenis Buku</h3>
            <a href="{{ route('jenis.create') }}" class="btn btn-primary float-right">Create</a>
            </div>
            
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <td>Jenis Buku</td>
                <td>Aksi</td>
            </tr>
            </thead>
            <tbody>
            @foreach($dataJenisBuku as $jenis)
            <tr>
                <td>{{ $jenis->jenis_buku }}</td>
                <td>
                {!! Form::model($jenis, ['route' => ['jenis.destroy', $jenis], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                    <a class="btn btn-warning" href="{{ route('jenis.edit', $jenis->id) }}">Edit</a>
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