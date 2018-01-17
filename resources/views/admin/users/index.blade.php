@extends('layouts.admin')


@section('content')

<h1>Users</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Actions</th>
        <th>Id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
            <tr>
                <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->image ? $user->image->file_path : 'no image'}}" alt="User Image"></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'No active'}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection