@extends('layouts.default.default')

@include('layouts.default.meta',
[
    $title = 'Dragon Lancers | Blog | '  .ucwords($category),
    $description = trans('description.'.$category),
    $descriptionSchemaorg  = trans('description.'.$category),
    $descriptionTwitter = trans('description.'.$category),
    $typeOpengraph = 'website',
    $descriptionOpengraph = trans('description.'.$category),
    $image = 'https://www.dragonlancers.com/images/blog/' .$category .'.png'

])


@section('content')

@include('layouts.blog.nav')



    <section class="blog-container">
        <article class="blog-post-category">
            <header>
                <div class="{{ $category }}-line">
                    <h1 class="{{ $category }} article-category">{{ $category }}</h1>
                </div>
            </header>
        </article>
        @foreach($articles as $article)
            <article class="blog-posts">
                <header class="blog-link {{ $article->category }}-line">
                    <h2 class="{{ $article->category }} article-category">
                        {{ $article->category }}
                    </h2>
                </header>
                <div class="article-header">
                    <h1 class="{{ $article->category }}-link article-title-link">
                        <a href="@if(laravelLocalization::getCurrentLocale() == 'da'){{ url(LaravelLocalization::getCurrentLocale().'/'.'blog', $article->slug_da) }}
                        @else{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog', $article->slug_en) }}@endif">
                            @if(laravelLocalization::getCurrentLocale() == 'da')
                                @if ($article->title_da !== '')
                                    {{ $article->title_da }}
                                @else
                                    {{ $article->title_en }}
                                @endif
                            @else
                                {{ $article->title_en }}
                            @endif
                        </a>
                    </h1>
                </div>
                <footer class="article-footer">
                    <div class="{{ $article->category }}-link author-link">
                        <p class="author-by"> {{ trans('blog.by') }} <a href="authors#{{ str_slug($article->author, '-') }}">{{ $article->author }}</a></p>
                    </div>
                    <div class="date">
                        <p>@if(LaravelLocalization::getCurrentLocale()=='da'){{ $article->published_at->format('d-m-Y') }}
                            @else{{ $article->published_at->toFormattedDateString() }}@endif</p>
                    </div>
                </footer>
            </article>
        @endforeach



    </section>

    <script>
        $(document).ready(function(){
            $('.blog-link').toggleClass('active');
        });
    </script>


@stop