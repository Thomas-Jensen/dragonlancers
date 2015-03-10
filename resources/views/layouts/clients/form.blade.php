<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Reg_number Form Input -->
<div class="form-group">
    {!! Form::label('reg_number', 'Reg number:') !!}
    {!! Form::text('reg_number', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Address Form Input -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Zip_code Form Input -->
<div class="form-group">
    {!! Form::label('zip_code', 'Zip code:') !!}
    {!! Form::text('zip_code', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- City Form Input -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Country Form Input -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Language Form Input -->
<div class="form-group">
    {!! Form::label('language', 'Language:') !!}
    <select name="language" required>
        <option value=''selected="selected" disabled>Choose Language</option>
        <option value="en">ENGLISH</option>
        <option value="da">DANISH</option>
    </select>
</div>

<!-- Currency Form Input -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <select name="currency" required>
        <option value=''selected="selected" disabled>Choose Currency</option>
        <option value="kr">KRONER</option>
        <option value="dollar">DOLLAR</option>
        <option value="euro">EURO</option>
    </select>
</div>

<!-- Phone Form Input -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Email Form Input -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- $buttonText Client Form Input -->
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'form-control']) !!}
</div>

{!! Form::close() !!}
