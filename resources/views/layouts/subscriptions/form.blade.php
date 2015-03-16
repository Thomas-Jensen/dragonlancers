<h2 class="client">Client: {{ $client->name or null }}{{ $project->client->name or null }}</h2>


<!-- Services Form Input -->
<div class="form-group">
    {!! Form::label('services', 'Services:') !!}
    {!! Form::text('services', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Domain Form Input -->
<div class="form-group">
    {!! Form::label('domain', 'Domain:') !!}
    {!! Form::text('domain', null, ['class' => 'form-control']) !!}
</div>


<!-- Fee Form Input -->
<div class="form-group">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::text('fee', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Renews Form Input -->
<div class="form-group">
    {!! Form::label('renews', 'Renews:') !!}
    {!! Form::text('renews', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Maintenance Form Input -->
<div class="form-group">
    {!! Form::label('maintenance', 'Maintenance:') !!}
    {!! Form::text('maintenance', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Seo Form Input -->
<div class="form-group">
    {!! Form::label('seo', 'Seo:') !!}
    {!! Form::text('seo', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Work Form Input -->
<div class="form-group">
    {!! Form::label('work', 'Work:') !!}
    {!! Form::text('work', null, ['class' => 'form-control', 'required']) !!}
</div>


<!-- Screen_shot Form Input -->
<div class="form-group">
    {!! Form::label('screen_shot', 'Screen shot:') !!}
    {!! Form::file('screen_shot') !!}
</div>

<!-- Status Form Input -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" required>
        <option value='{{ $subscription->status or null }}'selected="selected">{{ $subscription->status or 'Select Status' }}</option>
        <option value="active">Active</option>
        <option value="suspended">Suspended</option>
        <option value="cancelled">Cancelled</option>
    </select>
</div>

<!-- $buttonText Client Form Input -->
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'submit-full']) !!}
</div>


{!! Form::close() !!}