@extends('layouts.default.default')

@include('layouts.default.meta',
[
    $title = 'Dragon Lancers | ' . trans('title.creative-agency'),
    $description = trans('description.home'),
    $descriptionSchemaorg  = trans('description.home'),
    $descriptionTwitter = trans('description.home'),
    $typeOpengraph = 'website',
    $descriptionOpengraph = trans('description.home'),
])

@section('head')
    <script>
        $(function(){
            $(".typed").typed({
                strings: ["{{ trans('about.design') }}", "{{ trans('about.development') }}"
                    , "{{ trans('about.apps') }}", "{{ trans('about.seo') }}", "{{ trans('about.subscriptions') }}"
                    , "{{ trans('about.print') }}", "{{ trans('about.movies') }}", "{{ trans('about.websites') }}"],
                typeSpeed: 100,
                backDelay: 1000,
                loop: true
            });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 17,
                center: new google.maps.LatLng(55.4883363, 8.4468283),
                disableDefaultUI: true
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);

            var image =  {url:"{{ asset('images/logomap.png') }}", size: new google.maps.Size(100, 150),
                                scaledSize: new google.maps.Size(75, 100)};
            var myLatLng = new google.maps.LatLng(55.4875163, 8.4470283);
            var dragonMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop

@section('content')

    <nav class="about-menu">
        <ul class="about-nav">
            <li>
                <a data-scroll href="#intro">
                    <span class="dot">
                        <span class="inner intro-circle"></span>
                    </span>
                    <span class="label">{{ trans('navigation.intro') }}</span>
                </a>
            </li>
            <li>
                <a data-scroll href="#values">
                     <span class="dot">
                        <span class="inner values-circle"></span>
                    </span>
                    <span class="label">{{ trans('navigation.values') }}</span>
                </a>
            </li>
            <li>
                <a data-scroll href="#process">
                     <span class="dot">
                        <span class="inner process-circle"></span>
                    </span>
                    <span class="label">{{ trans('navigation.prod-process') }}</span>
                </a>
            </li>
            <li>
                <a data-scroll href="#team-info">
                     <span class="dot">
                        <span class="inner team-circle"></span>
                    </span>
                    <span class="label">{{ trans('navigation.team-info') }}</span>
                </a>
            </li>
            <li>
                <a data-scroll href="#dl-info">
                     <span class="dot">
                        <span class="inner dl-circle"></span>
                    </span>
                    <span class="label">{{ trans('navigation.dl-info') }}</span>
                </a>
            </li>
        </ul>
    </nav>

<section class="top">
    <figure class="no-video">
        <img src="{{ asset('images/novideoabout.png')}}" width="100%" alt="Dragon Lancers">
    </figure>
    <video autoplay="autoplay" loop class="landing-video about-video" id="videoElement">
        <source src="{{ asset('movies/Bokeh.mp4')}}" type="video/mp4" media="screen and (min-width:1024px)">
        <source src="{{ asset('movies/Bokeh.webm')}}" type="video/webm" media="screen and (min-width:1024px)">
    </video>
    <section class="center-container">
        <div class="contact-video-overlay">
            <h1>
            {{ trans('about.we-are') }} </br></br>
            {{ trans('about.we-do') }} <span class="typed"></span> </br></br>
            {{ trans('about.for-clients') }}
            </h1>
        </div>
    </section>
</section>
<section id="intro">
    <div class="intro-left"></div>
    <div class="intro-right"></div>
    <article>
        <div class="intro-letter">
            <h2>{{ trans('about.welcome') }}</h2> </br></br></br></br>
             {!! trans('about.intro') !!}
            <figure class="signature-thomas">
                <img src="{{ asset('images/thomas-signature.svg') }}" width="70%"/>
            </figure>
            <p class="signature-letter">
                Thomas P. Jensen</br></br>
                Co-Founder</br></br>
                Dragon Lancers
            </p>
        </div>
    </article>
    <div class="intro-left"></div>
    <div class="intro-right"></div>
</section>

<section id="values">
    <div class="values-menu-holder">
        <a class="values-menu-item about-leadership">
            <h3>{{ trans('navigation.leadership') }}</h3>
        </a>
        <a class="values-menu-item about-innovation active">
            <h3>{{ trans('navigation.innovation') }}</h3>
        </a>
        <a class="values-menu-item about-creative-process">
            <h3>{{ trans('navigation.creative-process') }}</h3>
        </a>
        <a class="values-menu-item about-perfectionism">
            <h3>{{ trans('navigation.perfectionism') }}</h3>
        </a>
        <a class="values-menu-item about-technology">
            <h3>{{ trans('navigation.technology') }}</h3>
        </a>
    </div>

    <div class="values-txt-holder">
        <div id="leadership-box" class="animate fadeIn padding">
            <h3>{{ trans('title.leadership') }}</h3></br></br>
            <p>{{ trans('about.values-leadership') }}</p>
        </div>
        <div id="innovation-box" class="animate fadeIn padding">
            <h3>{{ trans('title.innovation') }}</h3></br></br>
            <p>{{ trans('about.values-innovation') }}</p>
        </div>
        <div id="creative-process-box" class="animate fadeIn padding">
            <h3>{{ trans('title.creative-process') }}</h3></br></br>
            <p>{{ trans('about.values-creativeprocess') }}</p>
        </div>
        <div id="perfectionism-box" class="animate fadeIn padding">
            <h3>{{ trans('title.perfectionism') }}</h3></br></br>
            <p>{{ trans('about.values-perfectionism') }}</p>
        </div>
        <div id="technology-box" class="animate fadeIn padding">
            <h3>{{ trans('title.technology') }}</h3></br></br>
            <p>{{ trans('about.values-technology') }}</p>
        </div>
    </div>

</section>

<section id="process">
    <div class="production-process">
        <h2>{{ trans('title.production-process') }}</h2></br></br>
        <p>
            {{ trans('about.production-process') }}
        </p>
    </div>
    <div class="process-menu">
        <span class="process-menu-item planning-button active-slide">
            <p>{{ trans('navigation.planning') }}</p>
        </span>
        <span class="process-menu-item design-button">
            <p>{{ trans('navigation.design') }}</p>
        </span>
        <span class="process-menu-item development-button">
            <p>{{ trans('navigation.development') }}</p>
        </span>
        <span class="process-menu-item finalizing-button">
            <p>{{ trans('navigation.finalizing') }}</p>
        </span>
        <span class="process-menu-item launch-button">
            <p>{{ trans('navigation.launch') }}</p>
        </span>
    </div>
    <section class="prod-slide-container">
        <div class="prod-process" id="planning">
            <div>
                <img src="{{ asset('images/build/planning.svg')}}" width="100%">
                <p>
                    {{ trans('about.planning-process') }}
                </p>
            </div>
        </div>
        <div class="prod-process" id="design">
            <div>
                <img src="{{ asset('images/build/design.svg')}}" width="100%">
                <p>
                    {{ trans('about.design-process') }}
                </p>
            </div>
        </div>
        <div class="prod-process" id="development">
            <div>
                <img src="{{ asset('images/build/development.svg')}}" width="100%">
                <p>
                    {{ trans('about.development-process') }}
                </p>
            </div>
        </div>
        <div class="prod-process" id="finalizing">
            <div>
                <img src="{{ asset('images/build/finalizing.svg')}}" width="100%">
                <p>
                    {{ trans('about.finalizing-process') }}
                </p>
            </div>
        </div>
        <div class="prod-process" id="launch">
            <div>
                <img src="{{ asset('images/build/launch.svg')}}" width="100%">
                <p>
                    {{ trans('about.launch-process') }}
                </p>
            </div>
        </div>
    </section>
</section>

<section id="team-info">
    <div class="our-info-wrapper">
        <div class="left-blue" id="thomas">
            <div class="our-info">
                <img src="{{ asset('images/build/Thomas-Jensen.png')}}">
                <h3 class="our-titles">Thomas Jensen </br></br> Co-Founder </br></br> Web Developer</h3>
                <p>
                    {{ trans('about.thomas') }}
                </p>
            </div>
        </div>
        <div class="right-blue" id="ilona">
            <div class="our-info">
                <img src="{{ asset('images/build/Ilona-Olejnik.png')}}">
                <h3 class="our-titles">Ilona Olejnik</br></br> Co-Founder </br></br> {{ trans('team.graphic') }} Designer</h3>
                <p>
                    {{ trans('about.ilona') }}
                </p>
            </div>
        </div>
    </div>
</section>

    <section id="dl-info">
        <div class="half">
            <div id="map-canvas"></div>
        </div>
        <div class="company-info" itemscope itemtype="http://schema.org/Organization">
                <figure>
                    <img itemprop="logo" src="{{ asset('images/logo.svg') }}" alt="logo"/>
                </figure>
                <h2 itemscope="name">DRAGON LANCERS</h2>
                <h3>{{ trans('dragonlancers.ca') }}</h3>
                <p class="address">
                    {!! trans('dragonlancers.address') !!}
                    <a href="tel:+4531590062" itemprop="telephone">+45 31 59 00 62</a> </br></br>
                    <a href="mailto:hello@dragonlancers.com" itemprop="email">Hello@DragonLancers.com</a>
                    <span property="url" content=https://www.dragonlancers.com"></span>
                </p>
        </div>
    </section>


@stop