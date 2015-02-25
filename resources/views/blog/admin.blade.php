@extends('layouts.default.default')



@section('content')

    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


  <h1>Coming Articles:</h1>



    </section>

    <section class="blog-container">


        @foreach($articles as $article)
            <article class="blog-posts">
                <header class="blog-link {{ $article->category }}-line">
                    <h2 class="{{ $article->category }} article-category">
                        <a href="{{ $article->category }}">{{ $article->category }}</a>
                    </h2>
                </header>
                <div class="article-header">
                    <h1 class="{{ $article->category }}-link article-title-link">
                        <a href="@if(laravelLocalization::getCurrentLocale() == 'da'){{ url(LaravelLocalization::getCurrentLocale().'/'.'blog', $article->slug_da) }}
                    @else{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog', $article->slug_en ) }}{{'/edit'}}@endif">
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