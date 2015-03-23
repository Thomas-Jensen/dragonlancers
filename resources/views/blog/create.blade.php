@extends('layouts.default.default')

@section('content')

   @include('layouts.backend.header', [$title='Create New Article'])

    <section class="blog-container">

    {!! Form::open(['action' => 'ArticlesController@store']) !!}

    @include('layouts.blog.form', [$buttonText='Add Article'])

    @include('errors.list')

    </section>

@stop