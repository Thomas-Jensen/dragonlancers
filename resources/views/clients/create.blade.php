@extends('layouts.default.default')


@section('content')

    @include('layouts.backend.header', [$title='Create New Client'])



    <section class="blog-container">


        {!! Form::open(['action' => 'ClientsController@store']) !!}

        @include('layouts.clients.form', [$buttonText='Create Client'])

        @include('errors.list')

    </section>

@stop