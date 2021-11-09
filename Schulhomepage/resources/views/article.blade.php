@extends('layouts.app')

@section('content')
    <div class="container px-4 px-lg-5">
        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
            by
            <a href="#">{{ $article->author }}</a>
        </p>

        <hr>

        <hr>
        <!-- Date/Time -->
        <p>Posted on {{ $article->created_at }}</p>
        <hr>

        <p class="body">{{ $article->body }}</p>
    </div>
@endsection
