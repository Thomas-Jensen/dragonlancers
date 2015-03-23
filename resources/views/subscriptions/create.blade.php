@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Create New Subscription'])


    <section class="blog-container">

        {!! Form::open(['action' => 'SubscriptionsController@store', 'files' => true]) !!}
        {!! Form::hidden('client_id', $client->id) !!}

        @include('layouts.subscriptions.form', [$buttonText='Add Subscription'])

        @include('errors.list')

    </section>

@stop