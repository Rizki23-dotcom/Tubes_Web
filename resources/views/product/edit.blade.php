@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3>Edit {{ $book->title }}</h3>
						{!! Form::model($book, ['route' => ['book.update', $book],'method' =>'patch', 'files' => true])!!}
							@include('product._form', ['model' => $book])
						{!! Form::close() !!}		
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
