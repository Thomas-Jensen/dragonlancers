@extends('layouts.default.default')



@section('content')

    @include('layouts.backend.header', [$title=''])

    <section class="blog-container">

        <h1>Subscriptions:</h1>



        @foreach($subscriptions as $subscription)

            <div>
                {{ $subscription->client_id }}
            </div>

        @endforeach



    </section>




@stop