@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Subscription'])


    <section class="blog-container">

        {!! Form::model($subscription, ['method' => 'PATCH', 'action' => ['SubscriptionsController@update', $subscription->id]]) !!}

        @include('layouts.subscriptions.form', [$buttonText='Update Subscription'])

        @include('errors.list')

    </section>

@stop