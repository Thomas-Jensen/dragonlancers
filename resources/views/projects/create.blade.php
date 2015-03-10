@extends('layouts.default.default')

@section('content')

    <section class="blog-container">

        {!! Form::open(['action' => 'ProjectsController@store']) !!}

        @include('layouts.projects.form', $buttonText='Create Project')

        @include('errors.list')

    </section>

@stop