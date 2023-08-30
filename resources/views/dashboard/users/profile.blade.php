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

            <h3 class="profile-username text-center">Admin</h3>

            <p class="text-muted text-center">Back-End Developer</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Name</b> <span class="float-right">{{ auth()->user()->name }}</span>
                </li>
                <li class="list-group-item">
                    <b>Email</b> <span class="float-right">{{ auth()->user()->email }}</span>
                </li>
                <li class="list-group-item">
                    <b>Gender</b> <span class="float-right">
                        @if (auth()->user()->gender === 1)
                            Male
                        @elseif (auth()->user()->gender === 2)
                            Female
                        @endif
                    </span>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('user-articles', auth()->user()) }}">View Articles</a>
                </li>
            </ul>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection