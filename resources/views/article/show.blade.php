@extends('layouts.app')

@section('content')
    <a href="/articles/{{ $article->id }}/edit">Редактировать</a>
    <hr />
    <h1>{{ $article->name }}</h1>
    <div>{{ $article->body }}</div>
@endsection
