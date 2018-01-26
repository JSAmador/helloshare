@extends('layouts.admin')


@section('content')

    <h1>All Comments for this item</h1>


    <table class="table table-striped">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Body</th>
            <th>Author</th>
            <th>Email</th>
            <th>Item</th>
            <th>Replies</th>
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
                    <td><a href="/items/{{$comment->item->id}}"> {{$comment->item->name}}</a></td>
                    <td>{{$comment->created_at}}</td>
                    <td><a href="{{route('replies.show', $comment->id)}}">View Replies</a></td>
                    <td>{{$comment->is_active}}</td>
                    <td>
                        @if($comment->is_active == 1)

                            {!! Form::open(['method'=>'PATCH', 'action'=>['ItemCommentController@update', $comment->id]]) !!}

                            <input type="hidden" name="is_active" value="0">

                            <div class="form-group">
                                {!! Form::submit('Unaprove', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}

                        @else
                            {!! Form::open(['method'=>'PATCH', 'action'=>['ItemCommentController@update', $comment->id]]) !!}

                            <input type="hidden" name="is_active" value="1">

                            <div class="form-group">
                                {!! Form::submit('Aprove', ['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}



                        @endif


                    </td>
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