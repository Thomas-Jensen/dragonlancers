@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Edit Client:</h1>
    </section>

    <section class="blog-container">

        {!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientsController@update', $client->id]]) !!}

        @include('layouts.clients.form', [$buttonText='Update Client'])

        @include('errors.list')

    </section>

@stop