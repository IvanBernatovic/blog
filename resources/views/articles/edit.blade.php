@extends('master')
@section('content')

{!! Form::open() !!}
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', $article->body, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
			{!! Form::submit('Update',  ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}

@stop