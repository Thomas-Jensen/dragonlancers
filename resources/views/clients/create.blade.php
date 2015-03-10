@extends('layouts.default.default')

@section('content')

    <section class="blog-container">

        {!! Form::open(['action' => 'ClientsController@store']) !!}

        @include('layouts.clients.form', $buttonText='Create Client')

        @include('errors.list')

    </section>

@stop