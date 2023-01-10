@extends('layouts.main')

@section('content')

@foreach ($articles as $article)
<article class="mb-5">
    <h1>
        <a href="/blog/{{ $article->slug }}">{{ $article->title }}</a>
    </h1>
    <p>{{ $article->excerpt }}</p>
</article>
@endforeach

@endsection