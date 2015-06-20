@extends('layouts.default.default')

@section('content')

    @include('layouts.backend.header', [$title='Edit Existing Project'])


    <section class="blog-container">

        {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}

        <h2 class="client">Client: {{ $client->name or null }}{{ $project->client->name or null }}</h2>

        <!-- Name Form Input -->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Start Form Input -->
        <div class="form-group">
            {!! Form::label('start', 'Start:') !!}
            {!! Form::input('date', 'start', $project->start->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Start_done Form Input -->
        <div class="form-group">
            {!! Form::label('start_done', 'Start done:') !!}
            {!! Form::input('date', 'start_done', $project->start_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Planning_start Form Input -->
        <div class="form-group">
            {!! Form::label('planning_start', 'Planning start:') !!}
            {!! Form::input('date', 'planning_start', $project->planning_start->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Planning_end Form Input -->
        <div class="form-group">
            {!! Form::label('planning_end', 'Planning end:') !!}
            {!! Form::input('date', 'planning_end', $project->planning_end->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Planning_done Form Input -->
        <div class="form-group">
            {!! Form::label('planning_done', 'Planning done:') !!}
            {!! Form::input('date', 'planning_done', $project->planning_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Design_start Form Input -->
        <div class="form-group">
            {!! Form::label('design_start', 'Design start:') !!}
            {!! Form::input('date', 'design_start', $project->design_start->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Design_end Form Input -->
        <div class="form-group">
            {!! Form::label('design_end', 'Design end:') !!}
            {!! Form::input('date', 'design_end', $project->design_end->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Design_done Form Input -->
        <div class="form-group">
            {!! Form::label('design_done', 'Design done:') !!}
            {!! Form::input('date', 'design_done', $project->design_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Development_start Form Input -->
        <div class="form-group">
            {!! Form::label('development_start', 'Development start:') !!}
            {!! Form::input('date', 'development_start', $project->development_start->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Development_end Form Input -->
        <div class="form-group">
            {!! Form::label('development_end', 'Development end:') !!}
            {!! Form::input('date', 'development_end', $project->development_end->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Development_done Form Input -->
        <div class="form-group">
            {!! Form::label('development_done', 'Development done:') !!}
            {!! Form::input('date', 'development_done', $project->development_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Finalizing_start Form Input -->
        <div class="form-group">
            {!! Form::label('finalizing_start', 'Finalizing start:') !!}
            {!! Form::input('date', 'finalizing_start', $project->finalizing_start->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Finalizing_end Form Input -->
        <div class="form-group">
            {!! Form::label('finalizing_end', 'Finalizing end:') !!}
            {!! Form::input('date', 'finalizing_end', $project->finalizing_end->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Finalizing_done Form Input -->
        <div class="form-group">
            {!! Form::label('finalizing_done', 'Finalizing done:') !!}
            {!! Form::input('date', 'finalizing_done', $project->finalizing_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Launch_start Form Input -->
        <div class="form-group">
            {!! Form::label('launch_start', 'Launch start:') !!}
            {!! Form::input('date', 'launch_start', $project->launch_start->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Launch_end Form Input -->
        <div class="form-group">
            {!! Form::label('launch_end', 'Launch end:') !!}
            {!! Form::input('date', 'launch_start', $project->launch_end->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Launch_done Form Input -->
        <div class="form-group">
            {!! Form::label('launch_done', 'Launch done:') !!}
            {!! Form::input('date', 'launch_start', $project->launch_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Finish Form Input -->
        <div class="form-group">
            {!! Form::label('finish', 'Finish:') !!}
            {!! Form::input('date', 'finish', $project->finish->format('Y-m-d'), ['class' => 'form-control', 'required']) !!}
        </div>

        <!-- Finish_done Form Input -->
        <div class="form-group">
            {!! Form::label('finish_done', 'Finish done:') !!}
            {!! Form::input('date', 'finish_done', $project->finish_done->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <!-- Status Form Input -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <select name="status" required>
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
            {!! Form::submit('Update Project', ['class' => 'submit-full']) !!}
        </div>

        {!! Form::close() !!}



        @include('errors.list')

    </section>

@stop