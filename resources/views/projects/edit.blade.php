@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Project'])


    <section class="blog-container">

        {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}

        @include('layouts.projects.form', [$buttonText='Update Project'])

        @include('errors.list')

    </section>

@stop