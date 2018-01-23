@extends('layouts.admin')

@section('content')

    <h1>Create Item</h1>

    <div class="col-sm-3">
        <img src="{{$item->image->file_path}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">

        @include('includes.form_errors')

        {!! Form::model($item, ['method'=>'PATCH', 'action'=>['AdminItemsController@update', $item->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', $categories , null,  ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('location_id', 'Location') !!}
            {!! Form::select('location_id', [0=>'User Location', 1=>'New Location'], 0,  ['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::label('image', 'Image') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Item', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminItemsController@destroy', $item->id]]) !!}


            <div class="form-group">
                {!! Form::submit('Delete Item', ['class'=>'btn btn-danger']) !!}
            </div>
        {!! Form::close() !!}
    </div>


@stop