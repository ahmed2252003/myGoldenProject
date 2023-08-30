@extends('dashboard.index')
@section('title')
    Profile
@endsection
@section('contentName')
    Profile
@endsection
@section('content')
<div class="col-md-4">
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

        <p class="text-muted text-center">Back-End Developer</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
            <b>Role</b> <a class="float-right">Admin</a>
            </li>
            <li class="list-group-item">
            <b>Country</b> <a class="float-right">Palestine</a>
            </li>
            <li class="list-group-item">
            <b>Address</b> <a class="float-right">Gaza Strip, Rafah City</a>
            </li>
        </ul>

        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection