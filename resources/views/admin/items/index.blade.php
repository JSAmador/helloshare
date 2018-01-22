@extends('layouts.admin')


@section('content')

    <h1>Items Index</h1>

    <table class="table table-striped">
    <thead>
    <tr>
        <th>Actions</th>
        <th>Id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Category</th>
        <th>Location</th>
        <th>Status</th>
        <th>User</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    @if($items)
        @foreach($items as $item)
            <tr>
                <td><a href="{{route('items.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>
                <td>{{$item->id}}</td>
                <td><img height="50" src="{{$item->image ? $item->image->file_path : 'no image'}}" alt="item Image"></td>
                <td><a href="{{route('items.edit', $item->id)}}">{{$item->name}}</a></td>
                <td>{{$item->description}}</td>
                <td>{{$item->category_id}}</td>
                <td>{{$item->location_id}}</td>
                <td>{{$item->Status}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>


@stop