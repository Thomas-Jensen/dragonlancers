@extends('layouts.default.default')

@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


        <h1>Edit Existing Article:</h1>



    </section>

    <section class="blog-container">


        @include('layouts.blog.form', [$buttonText='Save Changes'])


        @include('errors.list')

    </section>



@stop