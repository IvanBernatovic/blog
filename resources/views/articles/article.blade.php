@extends('master')
@section('content')

<h1>{{ $article->title }}</h1>
<h3>Author: {{ $article->user->username }}</h3>
<p>{{ $article->body }}</p>

@stop