@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Client'])


    <section class="blog-container">

        {!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientsController@update', $client->id]]) !!}

        @include('layouts.clients.form', [$buttonText='Update Client'])

        @include('errors.list')

    </section>

@stop