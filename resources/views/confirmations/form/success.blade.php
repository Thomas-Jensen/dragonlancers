@extends('layouts.default.default')

@section('content')


    <section class="confirmation">
        <figure>
            <a href="https://www.dragonlancers.com"><img src="{{ asset('images/cute-mr-dragon-success-page.png') }}" width="100%" alt="Thanks..."> </a>
            <figcaption><span>{{ trans('confirmations.success-contact') }}</span></figcaption>
        </figure>
    </section>


@stop