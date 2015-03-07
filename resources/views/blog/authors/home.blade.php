@extends('layouts.default.default')

@section('head')
    @include('layouts.default.meta',
[
    $title = 'Dragon Lancers | ' . trans('title.authors'),
    $description = trans('description.authors'),
    $descriptionSchemaorg  = trans('description.authors-schemaorg'),
    $descriptionTwitter = trans('description.authors-twitter'),
    $typeOpengraph = 'website',
    $descriptionOpengraph = trans('description.authors-opengraph'),
    $image = 'https://www.dragonlancers.com/images/dl-logo.png'
])
@stop

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
                <div class="article-header-authors authors-home">
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
                <ul class="author-social-container center">
                    @if($author->facebook !== '')
                    <li>
                        <a class="facebook share author-social" href="{{ $author->facebook }}">
                            <svg xmlns="http://www.w3.org/2000/svg"  version="1.1" id="Layer_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<path fill="#111111" d="M26.039,4.972c2.88,0,5.76,0,8.64,0c-0.006,0.085-0.017,0.171-0.017,0.256  c-0.001,2.269-0.001,4.538-0.001,6.807c0,0.084,0,0.168,0,0.265c-0.106,0-0.186,0-0.264,0c-1.506,0-3.012,0.002-4.518-0.001  c-0.788-0.001-1.369,0.337-1.695,1.056c-0.127,0.28-0.233,0.587-0.263,0.89c-0.053,0.525-0.049,1.057-0.053,1.586  c-0.006,1.075-0.002,2.149-0.002,3.224c0,0.069,0,0.14,0,0.227c2.457,0,4.881,0,7.323,0c-0.022,0.078-0.035,0.135-0.052,0.191  c-0.555,1.831-1.112,3.663-1.66,5.496c-0.052,0.174-0.131,0.218-0.305,0.217c-1.685-0.008-3.37-0.005-5.056-0.005  c-0.077,0-0.154,0-0.252,0c0,0.109,0,0.194,0,0.279c0,6.449,0,12.898,0,19.347c0,0.073,0.003,0.145,0.004,0.218  c-2.801,0-5.601,0-8.401,0c-0.001-0.099-0.004-0.199-0.004-0.298c0.017-6.422,0.034-12.843,0.052-19.265c0-0.09,0-0.179,0-0.27  c-0.072-0.005-0.111-0.01-0.151-0.01c-1.473,0-2.946-0.001-4.419,0c-0.046,0-0.091,0.009-0.137,0.015c0-1.978,0-3.955,0-5.933  c0.033,0.003,0.066,0.008,0.099,0.008c1.492,0.001,2.984,0.001,4.476,0c0.044,0,0.088-0.01,0.152-0.018c0-0.087,0-0.165,0-0.243  c0.004-2.341,0.001-4.682,0.018-7.022c0.004-0.535,0.043-1.074,0.121-1.604c0.165-1.122,0.588-2.141,1.325-3.017  c1.022-1.215,2.373-1.857,3.888-2.199C25.267,5.086,25.655,5.038,26.039,4.972z"/>
</svg>
                        </a>
                    </li>
                    @endif
                    @if($author->twitter !== '')
                    <li>
                        <a class="twitter share author-social" href="{{ $author->twitter }}">
                            <svg xmlns="http://www.w3.org/2000/svg"  version="1.1" id="Layer_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<path fill="#111111" d="M17.742,33.302c-3.379-0.299-5.636-1.985-6.89-5.156c1.141,0.156,2.195,0.163,3.269-0.135  c-4.36-1.09-5.964-4.94-5.806-7.336c1.01,0.502,2.048,0.849,3.279,0.88c-1.871-1.368-2.946-3.115-3.199-5.315  c-0.183-1.588,0.118-3.101,0.949-4.524c4.005,4.706,9.057,7.293,15.236,7.723c-0.047-0.429-0.101-0.819-0.13-1.211  c-0.261-3.394,1.898-6.497,5.025-7.495c2.738-0.874,5.219-0.326,7.37,1.59c0.284,0.252,0.503,0.342,0.889,0.245  c1.339-0.339,2.619-0.817,3.826-1.488c0.091-0.05,0.186-0.093,0.351-0.176c-0.571,1.727-1.615,2.999-3.044,3.995  c1.381-0.121,2.681-0.515,3.946-1.044c0.026,0.029,0.052,0.058,0.078,0.088c-0.588,0.687-1.147,1.402-1.773,2.052  c-0.503,0.522-1.081,0.973-1.64,1.44c-0.168,0.14-0.243,0.274-0.241,0.5c0.052,6.645-2.354,12.239-7.273,16.705  c-2.772,2.515-6.068,4.021-9.748,4.672c-3.875,0.687-7.673,0.398-11.374-0.97c-1.356-0.501-2.647-1.139-3.865-1.952  c1.917,0.149,3.803,0.016,5.655-0.508C14.482,35.359,16.169,34.517,17.742,33.302z"/>
</svg>
                        </a>
                    </li>
                    @endif
                    @if($author->googleplus !== '')
                    <li>
                        <a class="googleplus share author-social" href="{{ $author->googleplus }}">
                            <svg xmlns="http://www.w3.org/2000/svg"  version="1.1" id="Layer_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<path fill="#111111" d="M29.635,4.632c0.052,0.608-0.141,0.977-0.807,1.197c-0.696,0.23-1.424,0.37-2.146,0.508  C26,6.467,25.306,6.544,24.588,6.648c0.047,0.089,0.056,0.135,0.081,0.149c1.601,0.883,2.436,2.278,2.677,4.054  c0.263,1.941,0.293,3.874-0.262,5.781c-0.396,1.364-1.13,2.52-2.14,3.51c-0.491,0.481-1.001,0.943-1.473,1.441  c-0.795,0.841-0.853,1.67-0.078,2.521c0.714,0.783,1.519,1.485,2.301,2.203c1.025,0.942,1.994,1.931,2.739,3.117  c1.201,1.91,1.424,3.998,1.089,6.177c-0.563,3.66-2.746,5.989-6.137,7.213c-3.588,1.294-7.24,1.356-10.876,0.191  c-1.981-0.635-3.635-1.758-4.659-3.645c-0.438-0.807-0.681-1.676-0.797-2.584c-0.016-0.127-0.05-0.251-0.076-0.377  c0-0.544,0-1.09,0-1.635c0.024-0.085,0.06-0.169,0.071-0.256c0.162-1.377,0.67-2.606,1.589-3.65  c1.212-1.379,2.786-2.172,4.503-2.716c1.832-0.581,3.722-0.8,5.634-0.852c0.144-0.004,0.289,0,0.516,0  c-0.99-1.384-1.44-2.827-1.349-4.328c-1.099-0.148-2.168-0.205-3.192-0.447c-2.138-0.506-3.781-1.714-4.765-3.725  c-0.646-1.321-0.861-2.74-0.885-4.189C9.057,12.14,9.68,9.898,11.4,8.059c1.358-1.452,3.064-2.334,4.953-2.866  c0.856-0.241,1.742-0.378,2.614-0.561C22.525,4.632,26.08,4.632,29.635,4.632z M19.095,29.27c-0.452,0.039-0.908,0.052-1.355,0.12  c-2.03,0.307-3.791,1.131-5.12,2.746c-1.892,2.299-1.434,5.291,1.062,6.898c1.127,0.725,2.391,1.046,3.714,1.143  c1.911,0.138,3.755-0.113,5.46-1.047c3.671-2.011,3.386-6.281,0.878-8.326C22.386,29.704,20.804,29.301,19.095,29.27z   M13.614,12.836c0.102,2.333,0.917,4.731,3.078,6.519c1.786,1.478,4.02,1.16,5.346-0.737c0.654-0.933,0.996-1.981,1.143-3.102  c0.241-1.839-0.218-3.541-0.98-5.193c-0.737-1.599-1.911-2.617-3.695-2.846c-1.689-0.217-3.062,0.066-4.13,2.028  C13.878,10.42,13.668,11.418,13.614,12.836z"/>
                                <path fill="#111111" d="M46.842,24.174c-2.214,0-4.428,0-6.684,0c0,2.242,0,4.44,0,6.659c-1.412,0-2.783,0-4.204,0  c0-2.208,0-4.415,0-6.66c-2.25,0-4.448,0-6.668,0c0-1.417,0-2.797,0-4.222c2.221,0,4.419,0,6.653,0c0-2.242,0-4.441,0-6.66  c1.417,0,2.798,0,4.221,0c0,2.213,0,4.411,0,6.678c2.256,0,4.469,0,6.682,0C46.842,21.372,46.842,22.773,46.842,24.174z"/>
</svg>
                        </a>
                    </li>
                    @endif
                    @if($author->email !== '')
                    <li>
                        <a class="googleplus author-social" href="mailto:{{ $author->email }}">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                            <g>
                                <path d="M24.835,28.804h0.008c0.268,0,0.533-0.12,0.747-0.338l0.058-0.058c0.013-0.013,0.026-0.024,0.039-0.038l0.677-0.863
                                    L42.525,6.972c-0.033-0.071-0.09-0.12-0.151-0.12H7.206c-0.044,0-0.084,0.024-0.116,0.065l16.908,21.46
                                    C24.211,28.649,24.515,28.804,24.835,28.804z M7.019,9.762v30.441l12.112-15.067L7.019,9.762z M30.463,25.238l12.1,14.973V9.863
                                    L30.463,25.238z M26.616,30.125c-0.482,0.609-1.113,0.945-1.776,0.945c-0.665,0-1.295-0.334-1.776-0.94l-2.774-3.523L7.019,43.113
                                    v0.052c0,0.157,0.087,0.29,0.19,0.29h35.166c0.101,0,0.188-0.133,0.188-0.291v-0.049L29.303,26.71L26.616,30.125z"/>
                            </g>
                            </svg>
                        </a>
                    </li>
                    @endif
                    @if($author->phone !== '')
                    <li>
                        <a class="googleplus author-social" href="tel:{{ $author->phone }}">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                            <g>
                                <path d="M32.658,30.299c-2.661,1.624-3.179,3.766-5.321,3.248c-2.142-0.518-3.766-3.179-5.39-5.84
                                    c-1.624-2.661-3.248-5.321-2.73-7.464s2.661-1.624,5.321-3.248s-2.211-9.606-4.354-10.124s-7.982,4.872-7.982,4.872
                                    c-1.037,4.285,1.263,14.036,4.423,19.212s10.781,11.68,15.065,12.716c0,0,7.464-2.73,7.982-4.872
                                    C40.191,36.657,35.319,28.675,32.658,30.299z"/>
                            </g>
                            </svg>
                        </a>
                    </li>
                    @endif
                </ul>
            </article>
        @endforeach



    </section>

    <script>
        $(document).ready(function(){
            $('.blog-link').toggleClass('active');
        });
    </script>


@stop