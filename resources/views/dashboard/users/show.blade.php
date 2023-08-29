@extends('dashboard.index')
@section('title')
    User
@endsection
@section('content')

<div class="container">
    <h1>{{ $user->name }}</h1>
    <p>Number of Articles: {{ $user->articles->count() }}</p>
    <a href="{{ route('user-articles', ['user' => $user->id]) }}" class="btn btn-primary">View Articles</a>
</div>

@endsection
