
<!-- Title-en Form Input -->
<div class="form-group">
    {!! Form::label('title_en', 'English Title:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control', 'required', 'maxlength' => '50']) !!}
</div>

<!-- Title-da Form Input -->
<div class="form-group">
    {!! Form::label('title_da', 'Danish Title:') !!}
    {!! Form::text('title_da', null, ['class' => 'form-control', 'required', 'maxlength' => '50']) !!}
</div>

<!-- Category Form Input -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <select name="category" required>
        <option value='null'selected="selected" disabled>{{ $article->category or 'Choose Category' }}</option>
        <option value="php">PHP</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JAVASCRIPT</option>
        <option value="design">DESIGN</option>
        <option value="seo">SEO</option>
        <option value="business">BUSINESS</option>
        <option value="news">NEWS</option>
    </select>
</div>

<!-- Author Form Input -->
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    <select name="author" required>
        <option value=''selected="selected" disabled>{{ $article->author or 'Choose Author' }}</option>
        @foreach($authors as $author)
            <option value="{{ $author->author }}">{{ $author->author }}</option>
        @endforeach
    </select>
</div>

<!-- Body-en Form Input -->
<div class="form-group">
    {!! Form::label('body_en', 'English Body:') !!}
    {!! Form::textarea('body_en', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Body-da Form Input -->
<div class="form-group">
    {!! Form::label('body_da', 'Danish Body:') !!}
    {!! Form::textarea('body_da', null, ['class' => 'form-control']) !!}
</div>

<!-- Published_at Form Input -->
<div class="form-group">
    {!! Form::label('published_at', 'Publish On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
</div>


<!-- Add Article Form Input -->
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'form-control']) !!}
</div>


{!! Form::close() !!}