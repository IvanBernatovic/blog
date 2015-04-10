@extends('master')
@section('content')

<h1>{{ $article->title }}</h1>
<h3>Author: <a href="{{ route('user', $article->user->username) }}">{{ $article->user->username }}</a></h3>
<p>{{ $article->body }}</p>

@stop