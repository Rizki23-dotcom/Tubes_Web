@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row ">
					    <label class="col-sm-2 col-form-label">Judul</label>
					    <div class="col-sm-10">
					      <p class="form-control-plaintext">{{ $book->title }}</p>
					    </div>
					    <label class="col-sm-2 col-form-label">Penulis</label>
					    <div class="col-sm-10">
					      <p class="form-control-plaintext">{{ $book->writer }}</p>
					    </div>
					    <label class="col-sm-2 col-form-label">Rinkasan</label>
					    <div class="col-sm-10">
					      <p class="form-control-plaintext">{{ $book->summary }}</p>
					    </div>
					    <label class="col-sm-2 col-form-label">Harga</label>
					    <div class="col-sm-10">
					      <p class="form-control-plaintext">{{ $book->price }}</p>
					    </div>
					    <label class="col-sm-2 col-form-label">No.ISBN</label>
					    <div class="col-sm-10">
					      <p class="form-control-plaintext">
					      	{{ !empty($book->isbn->no_isbn) ? $book->isbn->no_isbn : '-'}}
					      </p>
					    </div>
					    <label class="col-sm-2 col-form-label">Jenis Buku</label>
					    <div class="col-sm-10">
					      <p class="form-control-plaintext">{{ $book->jenis->jenis_buku}}</p>
					    </div>

					    <label class="col-sm-2 col-form-label">Identitas Buku</label>
					    <div class="col-sm-10">
					    	@foreach($book->identity as $item)
					    		<p class="form-control-plaintext">{{ $item->nama_identity }}</p>
 							@endforeach
					      
					    </div>

					  	<div class="col-md-4">
					  		<img src="/img/{{$book->photo}}" alt="" class="img-thumbnail rounded">
					  	</div>
					    	

					</div>
				 	
				 	<a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
				</div>
			</div>
		</div>	
	</div>
	</div>
@endsection