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
                <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputContent">Content</label>
                <textarea name="content" class="form-control" id="exampleInputContent" placeholder="Enter content"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
