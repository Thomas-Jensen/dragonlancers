@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Add New Client:</h1>
    </section>


    <section class="blog-container">


        {!! Form::open(['action' => 'ClientsController@store']) !!}

        @include('layouts.clients.form', [$buttonText='Create Client'])

        @include('errors.list')

    </section>

@stop