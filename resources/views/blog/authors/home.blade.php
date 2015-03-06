@extends('layouts.default.default')

@section('content')

    @include('layouts.blog.nav')



    <section class="blog-container">
        <article class="blog-post-category">
            <header>
                <div class="dragonlancers-line">
                    <h1 class="dragonlancers article-category">{{ trans('blog.authors') }}</h1>
                </div>
            </header>
        </article>
        @foreach($authors as $author)
            <article class="blog-posts-authors" id="{{ $author->slug_author }}">
                <header class="blog-link dragonlancers-line">
                    <h2 class="dragonlancers article-category">
                        {{ $author->author }}
                    </h2>
                </header>
                <div class="article-header-authors">
                    <img class="author-img dragonlancers-border-round" src="{{ asset('/images/authors/' . $author->image) }}">
                    <p>
                        @if(laravelLocalization::getCurrentLocale() == 'da')
                            @if ($author->description_da !== '')
                                {{ $author->description_da }}
                            @else
                                {{ $author->description_en }}
                            @endif
                        @else
                            {{ $author->description_en }}
                        @endif
                    </p>
                </div>
            </article>
        @endforeach



    </section>

    <script>
        $(document).ready(function(){
            $('.blog-link').toggleClass('active');
        });
    </script>


@stop