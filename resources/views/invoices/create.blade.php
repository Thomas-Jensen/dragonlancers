@extends('layouts.default.default')

@section('content')

    <section class="blog-container">

        {!! Form::open(['action' => 'InvoicesController@store']) !!}

        @include('layouts.invoices.form', $buttonText='Create Invoice')

        @include('errors.list')

    </section>

@stop