@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Create New Author'])


    <section class="blog-container">



    {!! Form::open(['action' => 'AuthorsController@store', 'files' => true]) !!}


    @include('layouts.blog.authors.form', [$buttonText='Add Author'])


    @include('errors.list')

    </section>


@stop