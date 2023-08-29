@extends('dashboard.index')

@section('title', 'User Articles')

@section('contentName', 'User Articles')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>{{ $user->name }}'s Articles</h2>
        @if ($user->articles->count() > 0)
            <ul>
                @foreach ($user->articles as $article)
                    <li>
                        <strong>Title:</strong> {{ $article->title }}<br>
                        <strong>Content:</strong> {{ $article->content }}<br>
                        <strong>Created At:</strong> {{ $article->created_at }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No articles found for {{ $user->name }}.</p>
        @endif
    </div>
</div>
@endsection
