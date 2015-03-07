@extends('layouts.default.default')

@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


        <h1>Create New Author:</h1>



    </section>

    <section class="blog-container">



    {!! Form::open(['action' => 'AuthorsController@store', 'files' => true]) !!}


    @include('layouts.blog.authors.form', [$buttonText='Add Author'])


    @include('errors.list')

    </section>


@stop