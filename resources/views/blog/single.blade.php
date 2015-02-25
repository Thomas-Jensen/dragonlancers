@extends('layouts.default.default')

@section('content')


@extends('layouts.blog.nav')

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
                            @if ($article->title_da !== '')
                                {{ $article->title_da }}
                            @else
                                {{ $article->title_en }}
                            @endif
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
                <section  class="blog-article">
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


