@extends('master')

@section('content')

<div class="col-sm-12 col-md-5 col-lg-5">
	{!! Form::open(['url' => route('postLogin')]) !!}
		<div class="form-group">
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password',  ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Log in',  ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
</div>

@stop