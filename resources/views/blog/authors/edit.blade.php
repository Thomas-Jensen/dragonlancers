@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Author'])



    <section class="blog-container">


        {!! Form::model($author, ['files' => true, 'method' => 'PATCH', 'action' => ['AuthorsController@update', $author->slug_author]]) !!}


        @include('layouts.blog.authors.form', [$buttonText='Save Changes'])


        @include('errors.list')

    </section>


@stop