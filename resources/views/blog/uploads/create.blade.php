@extends('layouts.default.default')

@section('content')


    <h1>Upload files</h1>

    {!! Form::open(['action' => 'UploadsController@store', 'files' => true]) !!}


    <!-- Image Form Input -->
    <div class="form-group">
        {!! Form::label('images', 'Images:') !!}
        {!! Form::file('images[]', ['multiple' => true]) !!}
    </div>


    <!-- Add Author Form Input -->
    <div class="form-group">
        {!! Form::submit('Add Images', ['class' => 'form-control']) !!}
    </div>


    {!! Form::close() !!}


    @include('errors.list')


@stop