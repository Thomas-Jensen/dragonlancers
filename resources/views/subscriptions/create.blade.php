@extends('layouts.default.default')

@section('head')
    @include('layouts.backend.header')
@stop

@section('content')
    <section class="blog-menu-container">
        <h1>Add New Subscription:</h1>
    </section>

    <section class="blog-container">

        {!! Form::open(['action' => 'SubscriptionsController@store']) !!}
        @include('layouts.subscriptions.form', [$buttonText='Add Subscription'])

        @include('errors.list')

    </section>

@stop