@extends('dashboard.index')
@section('title')
    Admin
@endsection
@section('contentName')
    Main Page
@endsection
@section('content')
<div class="col-md-6">
    <h5>Welcome <strong>{{ auth()->user()->name }}</strong></h5>
</div>
@endsection