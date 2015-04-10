@extends('master')
@section('content')

{!! Form::open() !!}
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
			{!! Form::submit('Create',  ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}

@stop