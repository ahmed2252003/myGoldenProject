@extends('dashboard.index')
@section('title')
    Create User
@endsection
@section('contentName')
    Create Users
@endsection
@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create</h3>
    </div>
    <form action="{{ route('users.store') }}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password Confirmation</label>
          <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1"
              placeholder="Password">
      </div>
      <div class="form-group">
        <label>Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" @if(old('gender') == '1') checked @endif value='1'>
            <label class="form-check-label">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" @if(old('gender') == '2') checked @endif value='2'>
            <label class="form-check-label">Female</label>
        </div>
    </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
