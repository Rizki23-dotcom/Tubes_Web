@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3>Tambah Produk Buku</h3>
					{!! Form::open(['route' => 'book.store', 'files' => true])!!}
						@include('product._form')
					{!! Form::close() !!}
					</form>
		
				</div>
			</div>
		</div>
	</div>
</div>
@endsection