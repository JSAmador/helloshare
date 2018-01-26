@extends('layouts.single-item')



@section('content')


    <!-- Title -->
    <h1>{{$item->name}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$item->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$item->created_at->toDayDateTimeString()}}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{$item->image->file_path}}" alt="{{$item->name}}">

    <hr>

    <!-- Post Content -->
        <p class="lead">{{$item->description}}</p>
    <hr>

    @if(Auth::check())

        <!-- Item Comments -->

        <!-- Comments Form -->
        <div class="well">


            @if(Session::has('comment_message'))

                <p class="bg-success">{{session('comment_message')}}</p>

            @endif

            {!! Form::open(['method'=>'POST', 'action'=>'ItemCommentController@store']) !!}

            <input type="hidden" name="item_id" value="{{$item->id}}">

                <div class="form-group">
                    {!! Form::label('body', 'Leave a comment') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Publish Comment', ['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

        </div>

        @else
            <h4>You need to login to post comments</h4>

    @endif

    @if(count($comments) > 0)

        <!-- Posted Comments -->

        @foreach($comments as $comment)
            <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" height="50" src="{{$comment->user->image->file_path}}" alt="Sharer picture">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$comment->user->name}}
                        <small>{{$comment->created_at->toDayDateTimeString()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>


                    <!-- Replies -->
                    @if(count($comment->replies)>0)

                        @foreach($comment->replies as $reply)

                            @if($reply->is_active == 1)

                                <div class="media">

                                    <a href="" class="pull-left">
                                        <img class="media-object" height="50" src="{{$reply->user->image->file_path}}" alt="Sharer picture">
                                    </a>

                                    <div class="media-body">
                                        <h4 class="media-heading">{{$reply->user->name}}
                                            <small>{{$reply->created_at->toDayDateTimeString()}}</small>

                                        </h4>
                                            {{$reply->body}}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif

                    {!! Form::open(['method'=>'POST', 'action'=>'ItemCommentRepliesController@commentReply']) !!}


                    <input type="hidden" name="comment_id" value="{{$comment->id}}">

                        <div class="form-group">
                            {!! Form::label('body', 'Reply to comment') !!}
                            {!! Form::text('body', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Reply', ['class'=>'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}






                    <!-- End Replies -->


                </div>
            </div>
        @endforeach




    @endif




@stop