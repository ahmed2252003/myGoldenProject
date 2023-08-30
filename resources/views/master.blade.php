@extends('dashboard.index')
@section('title')
    Admin
@endsection
@section('contentName')
    Main Page
@endsection
@section('content')
<div class="col-md-6">
    <h4>Welcome <strong>{{ auth()->user()->name }}</strong></h4>
</div>
@endsection