@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Create New Invoice'])


    <section class="blog-container">

        {!! Form::open(['action' => 'InvoicesController@store']) !!}
        {!! Form::hidden('client_id', $client->id) !!}

        @include('layouts.invoices.form', [$buttonText='Create Invoice'])

        @include('errors.list')

    </section>

@stop