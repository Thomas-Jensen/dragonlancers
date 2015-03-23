@extends('layouts.default.default')



@section('content')

    @include('layouts.backend.header', [$title='Create New Project'])

    <section class="blog-container">

        <h1>Projects:</h1>



        @foreach($projects as $project)

            <div>
                {{ $project->name }}
            </div>

        @endforeach



    </section>




@stop