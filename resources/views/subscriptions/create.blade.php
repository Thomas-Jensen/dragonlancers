@extends('layouts.default.default')

@section('content')

    <section class="blog-container">

        {!! Form::open(['action' => 'SubscriptionsController@store']) !!}

        @include('layouts.subscriptions.form', $buttonText='Add Subscription')

        @include('errors.list')

    </section>

@stop