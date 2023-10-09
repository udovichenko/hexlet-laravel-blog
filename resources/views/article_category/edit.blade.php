@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{ Form::model($category, ['route' => ['article_categories.update', $category], 'method' => 'PATCH']) }}
    @include('article_category.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection