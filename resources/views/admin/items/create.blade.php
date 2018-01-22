@extends('layouts.admin')

@section('content')

    <h1>Create Item</h1>

    @include('includes.form_errors')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminItemsController@store', 'files'=>true]) !!}

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
        {!! Form::select('category_id', [''=>'Choose option', '0'=>'default'] , null,  ['class'=>'form-control']) !!}
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


@stop