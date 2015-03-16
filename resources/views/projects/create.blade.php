@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <div><h1>Add New Project:</h1></div>
    </section>

    <section class="blog-container">

        {!! Form::open(['action' => 'ProjectsController@store']) !!}

        @include('layouts.projects.form', [$buttonText='Create Project'])

        @include('errors.list')

    </section>

@stop