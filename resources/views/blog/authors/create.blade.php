@extends('layouts.default.default')

@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


        <h1>Create New Author:</h1>



    </section>

    <section class="blog-container">



    {!! Form::open(['action' => 'AuthorsController@store', 'files' => true]) !!}


    <!-- Author Name Form Input -->
    <div class="form-group">
        {!! Form::label('author', 'Author Name:') !!}
        {!! Form::text('author', '', ['class' => 'form-control', 'required', 'maxlength' => '15']) !!}
    </div>


    <!-- Image Form Input -->
    <div class="form-group">
        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image') !!}
    </div>


    <!-- Author Description_en Form Input -->
    <div class="form-group">
        {!! Form::label('description_en', 'English description:') !!}
        {!! Form::textarea('description_en', '', ['class' => 'form-control', 'required', 'maxlength' => '150']) !!}
    </div>


    <!-- Author Description_da Form Input -->
    <div class="form-group">
        {!! Form::label('description_da', 'Danish description:') !!}
        {!! Form::textarea('description_da', '', ['class' => 'form-control', 'required', 'maxlength' => '150']) !!}
    </div>



    <!-- Add Author Form Input -->
    <div class="form-group">
        {!! Form::submit('Add Author', ['class' => 'form-control']) !!}
    </div>


    {!! Form::close() !!}


    @include('errors.list')

    </section>


@stop