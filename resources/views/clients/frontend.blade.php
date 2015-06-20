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
            @if(!$subscriptions->isEmpty())
                <section class="subscription">
                    <h3>Subscriptions:</h3> </br>
                    @foreach($subscriptions as $subscription)
                        <h3><a href="http://{{ $subscription->domain }}">{{ $subscription->domain }}</a></h3>
                        <a class="sub-link" href="http://{{ $subscription->domain }}">
                            <img src="{{ asset('images/subscriptions/') . '/' . $subscription->screen_shot }}" alt="subscription img" width="100%"/>
                        </a>
                        <p>Status: {{ $subscription->status }}</p>
                    @endforeach
                    <h3>Support:</h3> </br>
                    <ul class="author-social-container center">
                        <li>
                            <a class="googleplus author-social" href="mailto:support@dragonlancers.com">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                     width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                            <g>
                                <path d="M24.835,28.804h0.008c0.268,0,0.533-0.12,0.747-0.338l0.058-0.058c0.013-0.013,0.026-0.024,0.039-0.038l0.677-0.863
                                    L42.525,6.972c-0.033-0.071-0.09-0.12-0.151-0.12H7.206c-0.044,0-0.084,0.024-0.116,0.065l16.908,21.46
                                    C24.211,28.649,24.515,28.804,24.835,28.804z M7.019,9.762v30.441l12.112-15.067L7.019,9.762z M30.463,25.238l12.1,14.973V9.863
                                    L30.463,25.238z M26.616,30.125c-0.482,0.609-1.113,0.945-1.776,0.945c-0.665,0-1.295-0.334-1.776-0.94l-2.774-3.523L7.019,43.113
                                    v0.052c0,0.157,0.087,0.29,0.19,0.29h35.166c0.101,0,0.188-0.133,0.188-0.291v-0.049L29.303,26.71L26.616,30.125z"/>
                            </g>
                            </svg>
                            </a>
                        </li>

                        <li>
                            <a class="googleplus author-social" href="tel:31590062">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                     width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                            <g>
                                <path d="M32.658,30.299c-2.661,1.624-3.179,3.766-5.321,3.248c-2.142-0.518-3.766-3.179-5.39-5.84
                                    c-1.624-2.661-3.248-5.321-2.73-7.464s2.661-1.624,5.321-3.248s-2.211-9.606-4.354-10.124s-7.982,4.872-7.982,4.872
                                    c-1.037,4.285,1.263,14.036,4.423,19.212s10.781,11.68,15.065,12.716c0,0,7.464-2.73,7.982-4.872
                                    C40.191,36.657,35.319,28.675,32.658,30.299z"/>
                            </g>
                            </svg>
                            </a>
                        </li>
                    </ul>
                </section>

            @endif

        </div>

        @if(!$projects->isEmpty())
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
        @endif

        @if(!$invoices->isEmpty())
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
        @endif

    </section>




@stop