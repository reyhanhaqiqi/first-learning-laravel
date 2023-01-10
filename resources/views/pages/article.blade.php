@extends('layouts.main')

@section('content')
<article class="mb-5">
    <h1>{{ $articles->title }}</h1>

    <p>By : Reyhan Haqiqi in <a href="/categories/{{ $articles->category->slug }}">{{ $articles->category->name }}</a>
    </p>

    {!! $articles->body !!}

    <div class="mt5">
        <a href="/blog">Back to Blog</a>
    </div>
</article>
@endsection