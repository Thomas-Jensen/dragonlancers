<h2 class="client">Client: {{ $client->name or null }}{{ $project->client->name or null }}</h2>

<!-- Amount Form Input -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Due Form Input -->
<div class="form-group">
    {!! Form::label('due', 'Due:') !!}
    {!! Form::input('date', 'due', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>

<!-- Paid Form Input -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    {!! Form::checkbox('paid', '1',  null) !!}
</div>

<!-- $buttonText Client Form Input -->
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'submit-full']) !!}
</div>

{!! Form::close() !!}


