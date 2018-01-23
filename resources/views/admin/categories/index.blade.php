@extends('layouts.admin')


@section('content')
    
<h1>Categories</h1>

<div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}


</div>

<div class="col-sm-6">

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>

        </tr>
        </thead>
        <tbody>
        @if($categories)
            @foreach($categories as $category)
                <tr>
                    <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                    <td>{{$category->created_at}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>

    
@stop