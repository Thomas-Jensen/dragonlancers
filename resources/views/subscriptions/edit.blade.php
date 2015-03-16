@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Edit Subscription:</h1>
    </section>

    <section class="blog-container">

        {!! Form::model($subscription, ['method' => 'PATCH', 'action' => ['SubscriptionsController@update', $subscription->id]]) !!}

        @include('layouts.subscriptions.form', [$buttonText='Update Subscription'])

        @include('errors.list')

    </section>

@stop