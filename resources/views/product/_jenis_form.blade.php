<div class="form-group {!! $errors->has('jenis_buku') ? 'has-error' : '' !!}">
    {!! Form::label('jenis_buku', 'Judul Buku') !!}
    {!! Form::text('jenis_buku', null, ['class'=>'form-control']) !!}
    {!! $errors->first('jenis_buku', '<p class="help-block">:message</p>') !!}
</div>

{!! Form::submit(isset($model) ? 'Update' : 'Simpan', ['class'=>'btn btn-primary']) !!}