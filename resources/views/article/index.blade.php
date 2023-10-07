@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>{{ $article->name }}</h2>

        <div>{{ Str::limit($article->body, 200) }}</div>
        <div>{{ $article->state == 'published' ? '✅' : '☑️' }}</div>
        <div>🩶: {{ $article->likes_count }}</div>
    @endforeach
@endsection
