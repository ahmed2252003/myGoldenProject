@extends('dashboard.index')
@section('title')
    Users
@endsection
@section('contentName')
    Manage Users
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>

                <div class="card-tools">
                    <form action="{{ route('users.index') }}" method="GET" class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request('search') }}">
                    
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">
                                <i class="fas fa-sync"></i> Refresh
                            </a>
                        </div>
                    </form>                    
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Email</th>
                            {{-- <th>Gender</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            {{-- <td>
                                @if ($user->gender === 1)
                                    Male
                                @elseif ($user->gender === 2)
                                    Female
                                @endif
                            </td> --}}
                            <td>
                                <a href="{{ route('users.show', ['user' => $user->id]) }}"><i class="fas fa-eye"></i></a>
                                <span class="action-space"></span>
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}"><i class="fas fa-edit"></i></a>
                                <span class="action-space"></span>
                                <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) document.getElementById('delete-form-{{ $user->id }}').submit();">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: none;">
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
    {{ $users->links() }}
</div>
<style>
  .action-space {
      margin: 0 8px;
  }
</style>
@endsection
