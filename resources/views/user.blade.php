@extends('master')
@section('content')

@section('content')
<p class="header">{!! $user->username !!}'s articles:</p>
@foreach($user->articles as $article)
	<h1><a href="{{ route('showArticle', $article->id) }}">{{ $article->title }}</a></h1>
	<p>{{ $article->body }}</p>
@endforeach

@stop

@stop