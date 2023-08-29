@extends('dashboard.index')
@section('title')
    Users
@endsection
@section('contentName')
    Edit Users
@endsection
@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit</h3>
    </div>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" id="exampleInputName" name="name" value="{{ $user->name }}" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $user->email }}" placeholder="Email">
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" @if($user->gender == '1') checked @endif value='1'>
              <label class="form-check-label">Male</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" @if($user->gender == '2') checked @endif value='2'>
              <label class="form-check-label">Female</label>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection
