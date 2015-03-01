@extends('layouts.default.default')

@section('content')


    <section class="coming-soon">
        <h1>{{ trans('errors.coming-soon') }}</h1>
        <figure>
            <img src="{{ URL::asset('images/build/paw-coming-soon.png') }}" width="100%" alt="Coming Soon Paws...">
        </figure>
    </section>


@stop