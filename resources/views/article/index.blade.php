@extends('layouts.app')

@section('content')
    {{ Form::open(['route' => 'articles.index', 'method' => 'GET']) }}
    {{ Form::text('q', $q) }}
    {{ Form::submit() }}
    {{ Form::close() }}

    <div>
        <a href="/articles/create">Создать статью</a>
    </div>

    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="/articles/{{ $article->id }}">
            <h2>{{ $article->name }}</h2>
        </a>

        <div>{{ Str::limit($article->body, 200) }}</div>
        <div>{{ $article->state == 'published' ? '✅' : '☑️' }}</div>
        <div>🩶: {{ $article->likes_count }}</div>
    @endforeach
@endsection
