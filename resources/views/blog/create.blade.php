@extends('layouts.default.default')

@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


        <h1>Create New Article:</h1>



    </section>

    <section class="blog-container">

    {!! Form::open(['action' => 'ArticlesController@store']) !!}


    @include('layouts.blog.form', [$buttonText='Add Article'])

    @include('errors.list')

    </section>

@stop