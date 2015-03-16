@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Edit Project:</h1>
    </section>

    <section class="blog-container">

        {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}

        @include('layouts.projects.form', [$buttonText='Update Project'])

        @include('errors.list')

    </section>

@stop