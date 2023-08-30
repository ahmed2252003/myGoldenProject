@extends('dashboard.index')

@section('title', 'User Articles')

{{-- @section('contentName', 'User Articles') --}}

@section('content')
{{-- <div class="row">
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
</div> --}}

<h1 class="text-dark">{{ auth()->user()->name }}'s Articles</h1>

    <div class="row">
        @if (auth()->user()->articles->count() > 0)
            @foreach (auth()->user()->articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header"><strong class="text-muted">Title : </strong><b><i class="text-primary">{{ $article->title }}</i></b></div>
                        <div class="card-body"><p style="color: #000">{{ $article->content }}</p></div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No articles found for {{ auth()->user()->name }}.</p>
        @endif
    </div>

    {{-- {{ auth()->user()->articles->links() }} --}}
@endsection
