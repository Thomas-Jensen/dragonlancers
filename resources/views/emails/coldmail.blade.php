@extends('layouts.default.default')

@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url('home') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url('home') }}">{{ trans('dragonlancers.ca') }}</a></h2>


        <h1>Send Cold Mail:</h1>

    </section>

    <section class="blog-container">

        {!! Form::open(array('action' => 'EmailController@cold')) !!}

        <!-- Lang Form Input -->
        <div class="form-group">
            {!! Form::label('lang', 'Language:') !!}
            <select name="lang" required>
                <option value=''selected="selected" disabled>Choose Language</option>
                <option value="en">ENGLISH</option>
                <option value="da">DANISH</option>
            </select>
        </div>

        <!-- Email Form Input -->
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>


        <!-- Name Form Input -->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Title Form Input -->
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Intro Form Input -->
        <div class="form-group">
            {!! Form::label('intro', 'Intro:') !!}
            {!! Form::text('intro', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Body Form Input -->
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::text('body', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Closing Form Input -->
        <div class="form-group">
            {!! Form::label('closing', 'Closing:') !!}
            {!! Form::text('closing', null, ['class' => 'form-control']) !!}
        </div>

        <!-- SEND Form Input -->
        <div class="form-group">
            {!! Form::submit('SEND', ['class' => 'form-control form-submit']) !!}
        </div>


        {!! Form::close() !!}

        @include('errors.list')

    </section>

@stop