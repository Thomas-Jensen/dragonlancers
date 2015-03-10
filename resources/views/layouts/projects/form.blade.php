<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Form Input -->
<div class="form-group">
    {!! Form::label('start', 'Start:') !!}
    {!! Form::input('date', 'start', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>

<!-- Start_done Form Input -->
<div class="form-group">
    {!! Form::label('start_done', 'Start done:') !!}
    {!! Form::input('date', 'start_done', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<!-- Planning_start Form Input -->
<div class="form-group">
    {!! Form::label('planning_start', 'Planning start:') !!}
    {!! Form::input('date', 'planning_start', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>

<!-- Planning_end Form Input -->
<div class="form-group">
    {!! Form::label('planning_end', 'Planning end:') !!}
    {!! Form::input('date', 'planning_end', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>

<!-- Planning_done Form Input -->
<div class="form-group">
    {!! Form::label('planning_done', 'Planning done:') !!}
    {!! Form::input('date', 'planning_done', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<!-- Design_start Form Input -->
<div class="form-group">
    {!! Form::label('design_start', 'Design start:') !!}
    {!! Form::input('date', 'design_start', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>

<!-- Design_end Form Input -->
<div class="form-group">
    {!! Form::label('design_end', 'Design end:') !!}
    {!! Form::input('date', 'design_end', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>

<!-- Design_done Form Input -->
<div class="form-group">
    {!! Form::label('design_done', 'Design done:') !!}
    {!! Form::input('date', 'design_done', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<!-- Coding_start Form Input -->
<div class="form-group">
    {!! Form::label('coding_start', 'Coding_start:') !!}
    {!! Form::text('coding_start', null, ['class' => 'form-control']) !!}
</div>








