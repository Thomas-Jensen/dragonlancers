<section class="blog-menu-container">

    <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
    <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


    <a class="php-bg blog-menu big-menu" href="{{ action('ArticlesController@php') }}">
        <h2>PHP</h2>
        <div class="php-a animation">
            <p class="typed-php"></p>
        </div>
    </a>



    <a class="html-bg blog-menu big-menu" href="{{ action('ArticlesController@html') }}">
        <h2>HTML</h2>
        <div class="html-a animation">
            <p class="typed-html" style="white-space:pre"></p>
        </div>
    </a>

    <a class="css-bg blog-menu big-menu" href="{{ action('ArticlesController@css') }}">
        <h2>CSS</h2>
        <div class="css-a animation">
            <p class="typed-css" style="white-space:pre"></p>
        </div>
    </a>

    <a class="javascript-bg blog-menu big-menu" href="{{ action('ArticlesController@javascript') }}">
        <h2>JS</h2>
        <div class="javascript-a animation">
            <p class="typed-js" style="white-space:pre"></p>
        </div>
    </a>

    <a class="design-bg blog-menu big-menu" href="{{ action('ArticlesController@design') }}">
        <h2>DESIGN</h2>
        <div class="design-a animation">
            <p>
                {{ trans('poster.design') }} {{ trans('poster.is') }} <br>
                {{ trans('poster.the-power') }} <br>
                {{ trans('poster.that') }} {{ trans('poster.creates') }} <br>
                {{ trans('poster.opinion')}}
            </p>
        </div>
    </a>

    <a class="seo-bg blog-menu big-menu" href="{{ action('ArticlesController@seo') }}">
        <h2>SEO</h2>
        <div class="seo-a animation">
            <p>
                {{ trans('blog.seo-optimized-content')}} <br>
                {{ trans('blog.seo-organic-traffic')}} <br>
                {{ trans('blog.seo-for-humans')}} <br>
                {{ trans('blog.seo-not-machines')}}
            </p>
        </div>
    </a>

    <a class="business-bg blog-menu big-menu" href="{{ action('ArticlesController@business') }}">
        <h2>BUSINESS</h2>
        <div class="business-a animation">
            <p>
                {{ trans('team.innovation')}} <br>
                {{ trans('team.creative-process')}} <br>
                {{ trans('team.perfectionism')}} <br>
                {{ trans('team.leadership')}}
            </p>
        </div>
    </a>

    <a class="news-bg blog-menu big-menu" href="{{ action('ArticlesController@news') }}">
        <h2>NEWS</h2>
        <div class="news-a animation">
            <p>
                {{ trans('blog.news-welcome')}} <br>
                {{ trans('blog.news-dl')}} <br>
                {{ trans('blog.news-ca')}} <br>
                {{ trans('blog.news-rights').date('Y') }}
            </p>
        </div>
    </a>



</section>