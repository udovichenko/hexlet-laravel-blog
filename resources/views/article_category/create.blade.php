@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{ Form::model($category, ['url' => route('article_categories.store')]) }}
    @include('article_category.form')
    {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection