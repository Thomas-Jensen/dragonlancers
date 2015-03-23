@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title=''])


    <section class="blog-container">


        <div class="blog-post">
            <header class="blog-link dragonlancers-line">
                <h2 class="dragonlancers article-category">
                    {{ $client->name }}
                </h2>
            </header>
            <section class="subscription">
                <h3>Subscriptions:</h3> </br>
                @foreach($subscriptions as $subscription)
                    <h3><a href="http://{{ $subscription->domain }}">{{ $subscription->domain }}</a></h3>
                    <a class="sub-link" href="http://{{ $subscription->domain }}">
                        <img src="{{ asset('images/subscriptions/') . '/' . $subscription->screen_shot }}" alt="subscription img" width="100%"/>
                    </a>
                    <p>Status: {{ $subscription->status }}</p>
                @endforeach
            </section>
        </div>

        <div class="blog-post">
            <section class="subscription">
                <h3>Projects:</h3> </br>
                @foreach($projects as $project)
                    <h3>{{ $project->name }}</h3>
                    <p>Time Frame: {{ $project->start->toFormattedDateString() }} - {{ $project->finish->toFormattedDateString() }} </br>
                        Status: {{ $project->status }} - Price: {{ $project->fee }} {{ $client->currency }}</p>
                @endforeach
            </section>
        </div>

        <div class="blog-post">
            <section class="subscription">
                <h3>Invoices:</h3>
                @foreach($invoices as $invoice)
                    <p>
                         Id: {{ $invoice->id }} - Amount: {{ $invoice->amount }}
                            - Due: {{ $invoice->due->toFormattedDateString() }} - @if($invoice->paid == 1) Paid @else Unpaid @endif
                    </p>
                @endforeach
            </section>
        </div>

    </section>




@stop