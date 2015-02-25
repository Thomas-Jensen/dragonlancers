<section class="blog-menu-container">

    <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
    <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }} BLOG</a></h2>


    <a class="php-bg blog-menu" href="{{ action('ArticlesController@php') }}">
        <h2>PHP</h2>
    </a>

    <a class="html-bg blog-menu" href="{{ action('ArticlesController@html') }}">
        <h2>HTML</h2>
    </a>

    <a class="css-bg blog-menu" href="{{ action('ArticlesController@css') }}">
        <h2>CSS</h2>
    </a>

    <a class="javascript-bg blog-menu" href="{{ action('ArticlesController@javascript') }}">
        <h2>JS</h2>
    </a>

    <a class="design-bg blog-menu" href="{{ action('ArticlesController@design') }}">
        <h2>DESIGN</h2>
    </a>

    <a class="seo-bg blog-menu" href="{{ action('ArticlesController@seo') }}">
        <h2>SEO</h2>
    </a>

    <a class="business-bg blog-menu" href="{{ action('ArticlesController@business') }}">
        <h2>BUSINESS</h2>
    </a>

    <a class="news-bg blog-menu" href="{{ action('ArticlesController@news') }}">
        <h2>NEWS</h2>
    </a>

</section>