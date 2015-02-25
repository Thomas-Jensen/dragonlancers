@extends('layouts.default.default')

@section('head')

    <script>
        $(function(){
            $(".typed-php").typed({
                strings: ["if ( page == php ) </br> { </br> echo '<3 PHP'; </br> }"],
                typeSpeed: 100,
                backDelay: 1000,
                loop: true
            });
            $(".typed-html").typed({
                strings: ["<!doctype html> \n <head> \n <title>HTML</title> \n </head> "],
                typeSpeed: 100,
                backDelay: 1000,
                loop: true,
                contentType: 'text'
            });
            $(".typed-css").typed({
                strings: [".container, section \n { \n display: flex; \n } "],
                typeSpeed: 100,
                backDelay: 1000,
                loop: true,
                contentType: 'text'
            });
            $(".typed-js").typed({
                strings: ["$('.js').addClass('a'); \n $(this).show(); \n $('.jquery').toggle(); \n $('.k').remove(); "],
                typeSpeed: 100,
                backDelay: 1000,
                loop: true,
                contentType: 'text'
            });
        });
    </script>

@stop

@section('content')

@extends('layouts.blog.bigmenu')

<section class="blog-container">


    @foreach($articles as $article)
        <article class="blog-posts">
            <header class="blog-link {{ $article->category }}-line">
                <h2 class="{{ $article->category }} article-category">
                    <a href="blog/{{ $article->category }}">{{ $article->category }}</a>
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
                    <p class="author-by"> {{ trans('blog.by') }} <a href="blog/authors/#{{ str_slug($article->author, '-') }}">{{ $article->author }}</a></p>
                </div>
                <div class="date">
                    <p>@if(LaravelLocalization::getCurrentLocale()=='da'){{ $article->published_at->format('d-m-Y') }}
                        @else{{ $article->published_at->toFormattedDateString() }}@endif</p>
                </div>
            </footer>
        </article>
    @endforeach



</section>




@stop