@extends('layouts.default.default')

@section('content')


    <section class="error">
        <figure>
            <a href="http://www.dragonlancers.com"><img src="{{ asset('images/build/cute-mr-dragon-error-page123.png') }}" width="100%" alt="page not found..."> </a>
            <figcaption><span>{{ trans('errors.error-code') }}: 500 - {{ trans('errors.500') }} - {{ trans('errors.logged') }}</span></figcaption>
        </figure>
    </section>


@stop