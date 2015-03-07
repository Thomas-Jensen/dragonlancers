@extends('layouts.default.default')

@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


        <h1>Edit Existing Author:</h1>



    </section>


    <section class="blog-container">


    {!! Form::model($author, ['method' => 'PATCH', 'action' => ['AuthorsController@update', $author->slug_author]]) !!}


        @include('layouts.blog.authors.form', [$buttonText='Save Changes'])


        @include('errors.list')

    </section>


@stop