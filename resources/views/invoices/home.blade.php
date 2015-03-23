@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Create New Invoice'])


    <section class="blog-container">

        <h1>{{ $invoice->due }}</h1>


    </section>




@stop