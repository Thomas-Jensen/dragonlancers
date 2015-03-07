<!-- Author Name Form Input -->
<div class="form-group">
    {!! Form::label('author', 'Author Name:') !!}
    {!! Form::text('author', null, ['class' => 'form-control', 'required', 'maxlength' => '15']) !!}
</div>


<!-- Image Form Input -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>


<!-- Author Description_en Form Input -->
<div class="form-group">
    {!! Form::label('description_en', 'English description:') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control', 'required', 'maxlength' => '150']) !!}
</div>


<!-- Author Description_da Form Input -->
<div class="form-group">
    {!! Form::label('description_da', 'Danish description:') !!}
    {!! Form::textarea('description_da', null, ['class' => 'form-control', 'required', 'maxlength' => '150']) !!}
</div>

<!-- Facebook Form Input -->
<div class="form-group">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Googleplus Form Input -->
<div class="form-group">
    {!! Form::label('googleplus', 'Googleplus:') !!}
    {!! Form::text('googleplus', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Form Input -->
<div class="form-group">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Form Input -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Form Input -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Add Author Form Input -->
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'form-control']) !!}
</div>


{!! Form::close() !!}