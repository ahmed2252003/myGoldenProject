@extends('dashboard.index')
@section('title')
    Create Article
@endsection
@section('contentName')
    Create Articles
@endsection
@section('content')
<div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create</h3>
      </div>
      <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" placeholder="Enter Title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputContent">Content</label>
                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="exampleInputContent" placeholder="Enter content"></textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
