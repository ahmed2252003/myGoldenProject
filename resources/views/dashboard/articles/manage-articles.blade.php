@extends('master')
@section('title')
    Articles
@endsection
@section('contentName')
    Manage Articles
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Articles</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>User</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($articles as $article)
                  <tr>
                      <td>{{ $article->id }}</td>
                      <td>{{ $article->title }}</td>
                      <td>{{ $article->user ? $article->user->name : 'Unknown' }}</td>
                      <td>
                          <a href="{{ route('articles.show', ['article' => $article]) }}"><i class="fas fa-eye"></i></a>
                          <span class="action-space"></span>
                          <a href="{{ route('articles.edit', ['article' => $article]) }}"><i class="fas fa-edit"></i></a>
                          <span class="action-space"></span>
                          <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this article?')) document.getElementById('delete-form-{{ $article->id }}').submit();">
                            <i class="fas fa-trash"></i>
                          </a>
                          <form id="delete-form-{{ $article->id }}" action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>          
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <div class="justify-center">
    {{ $articles->links() }}
</div>
</div>
<style>
  .action-space {
      margin: 0 8px; /* Adjust the space as needed */
  }
</style>
@endsection