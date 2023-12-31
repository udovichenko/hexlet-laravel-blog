@extends('layouts.app')

@section('content')
    <div>
        <a href="/article_categories/create">Создать категорию</a>
    </div>
    <h1>Список категорий статей</h1>
    @foreach($articleCategories as $category)
        <h2><a href="{{ route('article_categories.show', $category) }}">{{$category->name}}</a></h2>
        <div>{{$category->body}}</div>
    @endforeach
@endsection
