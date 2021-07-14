<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
    {!! Form::label('title', 'Judul Buku') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('writer') ? 'has-error' : '' !!}">
    {!! Form::label('writer', 'Penulis') !!}
    {!! Form::text('writer', null, ['class'=>'form-control']) !!}
    {!! $errors->first('writer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('summary') ? 'has-error' : '' !!}">
    {!! Form::label('summary', 'Ringkasan') !!}
    {!! Form::textarea('summary', null, ['class'=>'form-control']) !!}
    {!! $errors->first('summary', '<p class="help-block">:message</p>')!!}
</div>
<div class="form-group {!! $errors->has('price') ? 'has-error' : '' !!}">
    {!! Form::label('price', 'Harga') !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('id_jenis') ? 'has-error' : ''!!}">
    {!! Form::label('id_jenis', 'Jenis Buku', ['class'=>'form-label']) !!}
    @if(count($dataJenisBuku)>0)
        {!! Form::select('id_jenis',$dataJenisBuku, null, ['class'=>'form-control','id'=>'id_jenis','placeholder'=>'Pilih Kategori']) !!}
    @else
        <p>tidak ada pilihan Kategori</p>
    @endif
        {!! $errors->first('id_jenis', '<p class="helpblock">:message</p>') !!} 
</div>
<div class="form-group {!! $errors->has('no_isbn') ? 'has-error' : '' !!}">
    {!! Form::label('no_isbn', 'ISBN') !!}
    {!! Form::text('no_isbn', null, ['class'=>'form-control']) !!}
    {!! $errors->first('no_isbn', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('identity') ? 'has-error' : ''
!!}">
{!! Form::label('identity', 'Identitas Buku') !!}
@if(count($list_identity)>0)
 @foreach($list_identity as $key => $value)
<div class="checkbox">
<label>
{!! Form::checkbox('identity[]',$key, null) !!}
 {{ $value }}
</label>
 @endforeach
@else
<p>tidak ada pilihan</p>
@endif
{!! $errors->first('identity', '<p class="help-block">:message</p>')!!}
</div>
<div class="form-group {!! $errors->has('photo') ? 'has-error' : '' !!}">
    {!! Form::label('photo', 'Product photo (jpeg, png)') !!}
    {!! Form::file('photo') !!}
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    @if (isset($model) && $model->photo !== '')
    <div class="row">
        <div class="col-md-6">
            <p>Current photo:</p>
        <div class="!img-thumbnail">
            <img src="{{ url('/img/' . $model->photo) }}" class="img-thumbnail rounded" height="400">
        </div>
        </div>
    </div>
    @endif
</div>
{!! Form::submit(isset($model) ? 'Update' : 'Simpan', ['class'=>'btn
btn-primary']) !!}