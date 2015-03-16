@extends('layouts.default.default')



@section('content')


    <section class="blog-container">

        <h1>Invoices:</h1>



        @foreach($invoices as $invoice)

            <div>
                {{ $invoice->due }}
            </div>

        @endforeach



    </section>




@stop