@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Create New Project'])


    <section class="blog-container">

        {!! Form::open(['action' => 'ProjectsController@store']) !!}
        {!! Form::hidden('client_id', $client->id) !!}

        @include('layouts.projects.form', [$buttonText='Create Project'])

        @include('errors.list')

    </section>

@stop