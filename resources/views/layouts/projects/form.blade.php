<h2 class="client">Client: {{ $client->name or null }}{{ $project->client->name or null }}</h2>

<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Form Input -->
<div class="form-group">
    {!! Form::label('start', 'Start:') !!}
    {!! Form::input('date', 'start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Planning_start Form Input -->
<div class="form-group">
    {!! Form::label('planning_start', 'Planning start:') !!}
    {!! Form::input('date', 'planning_start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Planning_end Form Input -->
<div class="form-group">
    {!! Form::label('planning_end', 'Planning end:') !!}
    {!! Form::input('date', 'planning_end', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Design_start Form Input -->
<div class="form-group">
    {!! Form::label('design_start', 'Design start:') !!}
    {!! Form::input('date', 'design_start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Design_end Form Input -->
<div class="form-group">
    {!! Form::label('design_end', 'Design end:') !!}
    {!! Form::input('date', 'design_end', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Development_start Form Input -->
<div class="form-group">
    {!! Form::label('development_start', 'Development start:') !!}
    {!! Form::input('date', 'development_start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Development_end Form Input -->
<div class="form-group">
    {!! Form::label('development_end', 'Development end:') !!}
    {!! Form::input('date', 'development_end', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Finalizing_start Form Input -->
<div class="form-group">
    {!! Form::label('finalizing_start', 'Finalizing start:') !!}
    {!! Form::input('date', 'finalizing_start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Finalizing_end Form Input -->
<div class="form-group">
    {!! Form::label('finalizing_end', 'Finalizing end:') !!}
    {!! Form::input('date', 'finalizing_end', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Launch_start Form Input -->
<div class="form-group">
    {!! Form::label('launch_start', 'Launch start:') !!}
    {!! Form::input('date', 'launch_start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Launch_end Form Input -->
<div class="form-group">
    {!! Form::label('launch_end', 'Launch end:') !!}
    {!! Form::input('date', 'launch_end', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Finish Form Input -->
<div class="form-group">
    {!! Form::label('finish', 'Finish:') !!}
    {!! Form::input('date', 'finish', null, ['class' => 'form-control', 'required']) !!}
</div>


<!-- Status Form Input -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <select name="status">
        <option value='{{ $project->status or null }}'selected="selected" disabled>{{ $project->status or 'Pick Current Status' }}</option>
        <option value="start">Start</option>
        <option value="planning">Planning</option>
        <option value="design">Design</option>
        <option value="development">Development</option>
        <option value="finalizing">Finalizing</option>
        <option value="launch">Launch</option>
        <option value="finish">Finish</option>
    </select>
</div>

<!-- Fee Form Input -->
<div class="form-group">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::text('fee', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- $buttonText Client Form Input -->
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'submit-full']) !!}
</div>

{!! Form::close() !!}

















