@extends('layouts.admin')


@section('content')
    
<h1>All Comments</h1>

    
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Body</th>
            <th>Author</th>
            <th>Email</th>
            <th>Item</th>
            <th>Created</th>
            <th>Status</th>

        </tr>
        </thead>
        <tbody>
        @if($comments)
            @foreach($comments as $comment)
                <tr>
                    <td><a href="{{route('comments.edit', $comment->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>{{$comment->id}}</td>
                    <td><a href="{{route('comments.edit', $comment->id)}}">{{$comment->body}}</a></td>
                    <td>{{$comment->user->name}}</td>
                    <td>{{$comment->user->email}}</td>
                    <td><a href=""> {{$comment->item->name}}</a></td>
                    <td>{{$comment->created_at}}</td>
                    <td>{{$comment->is_active}}</td>
                    <td>    {!! Form::open(['method'=>'DELETE', 'action'=>['ItemCommentController@destroy', $comment->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop