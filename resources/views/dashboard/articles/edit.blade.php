@extends('dashboard.index')
@section('title')
    Edit
@endsection
@section('contentName')
    Edit Article
@endsection
@section('content')
<div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit</h3>
      </div>
      <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input value="{{ $article->title }}" type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label for="exampleInputContent">Content</label>
            <textarea class="form-control" id="exampleInputContent" name="content" placeholder="Enter Content">{{ $article->content }}</textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
</div>
@endsection
