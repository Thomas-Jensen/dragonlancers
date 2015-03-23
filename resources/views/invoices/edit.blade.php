@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Invoice'])


    <section class="blog-container">

        {!! Form::model($invoice, ['method' => 'PATCH', 'action' => ['InvoicesController@update', $invoice->id]]) !!}

        @include('layouts.invoices.form', [$buttonText='Update Invoice'])

        @include('errors.list')

    </section>

@stop