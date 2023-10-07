@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>

    <div>{{ $category->description }}</div>

    @if(!$category->articles->isEmpty())
        <ol>
            @foreach($category->articles as $article)
                <li>
                    <a href="/articles/{{ $article->id }}">{{ $article->name }}</a>
                </li>
            @endforeach
        </ol>
    @endif
@endsection
