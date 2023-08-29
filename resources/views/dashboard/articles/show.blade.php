@extends('dashboard.index')
@section('title')
    Article
@endsection
@section('content')

<div class="container">
    <h1>Article</h1>
    <h3>Title: {{ $article->title }}</h3>
    <p>Author: {{ $article->user ? $article->user->name : 'Unknown' }}</p>
    <p>Content: {{ $article->content }}</p>
    <p>Created at: {{ $article->created_at }}</p>
</div>

@endsection
