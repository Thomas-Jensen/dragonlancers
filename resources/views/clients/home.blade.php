@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Clients:'])

    <section class="blog-container">



    @foreach($clients as $client)

            <div class="client-post">
                <header class="blog-link dragonlancers-line">
                    <h2 class="dragonlancers article-category">
                        <a href="{{ url('clients/' . $id= $client->id ) }}">{{ $client->name }}</a>
                    </h2>
                </header>
                <p>
                    {{ $client->address }} </br>
                    {{ $client->city }} </br>
                    {{ $client->zip_code }} </br>
                    {{ $client->country }} </br>
                    Reg: {{ $client->reg_number }} </br>
                    Language: {{ $client->language }} </br>
                    <a href="tel:{{ $client->phone }}">{{ $client->phone }}</a> </br>
                    <a href="mailto:{{ $client->email }}">{{ $client->email }}</a> </br>
                </p>
                <a href={{ url('clients/' . $id= $client->id . '/edit') }}>Edit Client</a> </br>
                <a href={{ url('projects/' . $id = $client->id . '/create') }}>Create Project</a> </br>
                <a href={{ url('subscriptions/'. $id = $client->id . '/create') }}>Create Subscription</a> </br>
                <a href={{ url('invoices/' . $id = $client->id . '/create') }}>Create Invoice</a> </br>
                <a href={{ url('clients/' . $id= $client->id . '/destroy') }}>Delete Client</a>
            </div>

    @endforeach



    </section>




@stop