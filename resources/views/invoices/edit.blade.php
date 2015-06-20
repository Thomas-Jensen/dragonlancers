@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Invoice'])


    <section class="blog-container">

        {!! Form::model($invoice, ['method' => 'PATCH', 'action' => ['InvoicesController@update', $invoice->id]]) !!}

        <h2 class="client">Client: {{ $client->name or null }}{{ $project->client->name or null }}</h2>

        <!-- Amount Form Input -->
        <div class="form-group">
            {!! Form::label('amount', 'Amount:') !!}
            {!! Form::text('amount', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Due Form Input -->
        <div class="form-group">
            {!! Form::label('due', 'Due:') !!}
            {!! Form::input('date', 'due', $invoice->due->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Paid Form Input -->
        <div class="form-group">
            {!! Form::label('paid', 'Paid:') !!}
            {!! Form::checkbox('paid', '1',  null) !!}
        </div>

        <!-- $buttonText Client Form Input -->
        <div class="form-group">
            {!! Form::submit('Update Invoice', ['class' => 'submit-full']) !!}
        </div>

        {!! Form::close() !!}



        @include('errors.list')

    </section>

@stop