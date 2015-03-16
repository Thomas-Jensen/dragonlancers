@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Add New Invoice:</h1>
    </section>

    <section class="blog-container">

        {!! Form::open(['action' => 'InvoicesController@store']) !!}

        @include('layouts.invoices.form', [$buttonText='Create Invoice'])

        @include('errors.list')

    </section>

@stop