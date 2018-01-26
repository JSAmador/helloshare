@extends('layouts.admin')


@section('content')

    <h1>All replies for this Comment</h1>

    <h4>Author: {{$comment->user->name}}</h4>
    <p>Body: {{$comment->body}}</p>

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
        @if($replies)
            @foreach($replies as $reply)
                <tr>
                    <td><a href="{{route('replies.edit', $reply->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>{{$reply->id}}</td>
                    <td><a href="{{route('replies.edit', $reply->id)}}">{{$reply->body}}</a></td>
                    <td>{{$reply->user->name}}</td>
                    <td>{{$reply->user->email}}</td>
                    <td><a href="/items/{{$comment->item->id}}"> {{$comment->item->name}}</a></td>
                    <td>{{$reply->created_at}}</td>
                    <td>
                        @if($reply->is_active == 1)

                            {!! Form::open(['method'=>'PATCH', 'action'=>['ItemCommentRepliesController@update', $reply->id]]) !!}

                            <input type="hidden" name="is_active" value="0">

                            <div class="form-group">
                                {!! Form::submit('Unaprove', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}

                        @else
                            {!! Form::open(['method'=>'PATCH', 'action'=>['ItemCommentRepliesController@update', $reply->id]]) !!}

                            <input type="hidden" name="is_active" value="1">

                            <div class="form-group">
                                {!! Form::submit('Aprove', ['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}



                        @endif


                    </td>
                    <td>    {!! Form::open(['method'=>'DELETE', 'action'=>['ItemCommentRepliesController@destroy', $reply->id]]) !!}

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