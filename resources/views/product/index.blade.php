@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => 'book', 'method'=>'get', 'class'=>'form-inline'])!!}
                    <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                    {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control',
                    'placeholder' => 'Judul Buku..']) !!}
                    {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
                    </div>

                    {!! Form::submit('Search', ['class'=>'btn btn-primary ml-2']) !!}
               {!! Form::close() !!}
            <br>
            <div class="d-flex justify-content-between mb-2">
                <h3>Data Produk</h3>    
                <a href="{{ route('book.create') }}" class="btn btn-warning float-right">Create</a>
            </div>
            
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <td>Judul</td>
                <td>Penulis</td>
                <td>Harga</td>
                <td>ISBN</td>
                <td>Jenis Buku</td>
                <td>Aksi</td>
            </tr>
            </thead>
            <tbody>
            @foreach($book as $books)
            <tr>
                <td>{{ $books->title }}</td>
                <td>{{ $books->writer }}</td>
                <td>{{ $books->price }}</td>
                <td>{{ !empty($books->isbn->no_isbn) ? $books->isbn->no_isbn : '-'}}</td>
                <td>{{ $books->jenis->jenis_buku }}</td>
                <td class=""> 
                {!! Form::model($books, ['route' => ['book.destroy', $books], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                    <a class="btn btn-success btn-sm" href="{{ route('book.show',$books->id) }}">Detail</a>
                    <a href="{{ route('book.edit', $books->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    {!! Form::submit('delete', ['class'=>'btn btn-danger btn-sm']) !!}
                {!! Form::close()!!}
            </tr>
            @endforeach
            </tbody>
        </table>
        {{  $book->appends(compact('q'))->links('pagination::bootstrap-4') }}
        </div>
    </div>
    </div>
    </div>
    
</div>
@endsection