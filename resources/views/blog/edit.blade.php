@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Article'])


    <section class="blog-container">

        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}


        @include('layouts.blog.form', [$buttonText='Save Changes'])


        @include('errors.list')

    </section>



@stop