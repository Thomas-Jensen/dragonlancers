@extends('layouts.default.default')



@section('content')


    <section class="blog-container">

        <h1>Clients:</h1>



    @foreach($clients as $client)

            <div>
                <h3>{{ $client->name }}</h3>
                <a href={{ url('projects/' . $id = $client->id . '/create') }}>Create Project</a> </br>
                <a href={{ url('subscriptions/'. $id = $client->id . '/create') }}>Create Subscription</a> </br>
                <a href={{ url('invoices/' . $id = $client->id . '/create') }}>Create Invoice</a> </br>
                <a href={{ url('clients/' . $id=$client->id . '/destroy') }}>Delete Client</a>

            </div>

    @endforeach



    </section>




@stop