@extends('layouts.default.default')
@section('html') <html itemscope itemtype="http://schema.org/Article" @stop
@section('head')
        <title>@if(laravelLocalization::getCurrentLocale() == 'da'){{ $article->title_da }}@else{{ $article->title_en }}@endif</title>
        <meta name="Description" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ strip_tags(str_limit($article->body_da, 155)) }}@else{{ strip_tags(str_limit($article->body_en, 155)) }}@endif">

        <!-- Schema.org markup -->
        <meta itemprop="name" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ $article->title_da }}@else{{ $article->title_en }}@endif">
        <meta itemprop="description" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ strip_tags(str_limit($article->body_da, 155)) }}@else{{ strip_tags(str_limit($article->body_en, 155)) }}@endif">
        <meta itemprop="image" content="https://www.dragonlancers.com/images/blog/{{$article->category}}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@dragonlancersco">
        <meta name="twitter:title" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ $article->title_da }}@else{{ $article->title_en }}@endif">
        <meta name="twitter:description" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ strip_tags(str_limit($article->body_da, 200)) }}@else{{ strip_tags(str_limit($article->body_en, 200)) }}@endif">
        <meta name="twitter:creator" content="@dragonlancersco">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="https://www.dragonlancers.com/images/blog/{{$article->category}}">

        <!-- Open Graph data -->
        <meta property="og:title" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ $article->title_da }}@else{{ $article->title_en }}@endif"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="{{URL()}}"/>
        <meta property="og:image" content="https://www.dragonlancers.com/images/blog/{{$article->category}}" />
        <meta property="og:description" content="@if(laravelLocalization::getCurrentLocale() == 'da'){{ strip_tags(str_limit($article->body_da, 297)) }}@else{{ strip_tags(str_limit($article->body_en, 297)) }}@endif"/>
        <meta property="og:site_name" content="Dragon Lancers" />
        <meta property="article:published_time" content="{{ $article->published_at }}" />
        <meta property="article:modified_time" content="{{ $article->updated_at }}" />
        <meta property="article:section" content="{{ $article->category }}" />
        <meta property="article:tag" content="{{ $article->category }}" />
        <meta property="fb:admins" content="100001461555837"/>


@stop

@section('content')

@include('layouts.blog.nav')

    <section class="blog-container">
        <article class="blog-post">
            <header>
                <div class="{{ $article->category }}-line">

                    <h1 class="{{ $article->category }} article-category">
                        <a href="{{ $article->category }}">{{ $article->category }}</a>
                    </h1>
                </div>
                    <h2 class="article-title">
                        @if(laravelLocalization::getCurrentLocale() == 'da')
                                {{ $article->title_da }}
                        @else
                                {{ $article->title_en }}
                        @endif
                    </h2>


                <section class="article-data">
                    <div>
                        <img class="author-img {{ $article->category }}-border-round" src="{{ asset('images/authors/' . $author->image) }}">
                        <h3 class="{{ $article->category }}-link">
                            {{ trans('blog.by') }} <a href="authors/#{{ $author->slug_author }}">{{ $article->author }}</a>
                        </h3>
                    </div>
                    <div class="end-align">
                        <h3>
                            {{ trans('blog.published') }} @if(LaravelLocalization::getCurrentLocale()=='da'){{ $article->published_at->format('d-m-Y') }}
                            @else{{ $article->published_at->toFormattedDateString() }}@endif
                        </h3>
                    </div>
                </section>
            </header>
            <article>
                <section  class="blog-article {{ $article->category }}-link">
                    @if(laravelLocalization::getCurrentLocale() == 'da')
                        @if ($article->body_da !== '')
                            {!! $article->body_da !!}
                        @else
                            {!! $article->body_en !!}
                        @endif
                    @else
                        {!! $article->body_en !!}
                    @endif
                </section>
            </article>

            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'dragonlancers'; // required: replace example with your forum shortname
                var disqus_identifier = '{{ $article->id }}';

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


        </article>

    </section>

    <script>
        $(document).ready(function(){
            $('.blog-link').toggleClass('active');
        });
    </script>


@stop


