@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Edit Invoice:</h1>
    </section>

    <section class="blog-container">

        {!! Form::model($invoice, ['method' => 'PATCH', 'action' => ['InvoicesController@update', $invoice->id]]) !!}

        @include('layouts.invoices.form', [$buttonText='Update Invoice'])

        @include('errors.list')

    </section>

@stop