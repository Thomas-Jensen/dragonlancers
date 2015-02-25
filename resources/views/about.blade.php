@extends('layouts.default.default')

@section('head')
    <meta name="Description" content="{{ trans('description.home') }}">
    <title>Dragon Lancers | {{ trans('title.creative-agency') }}</title>
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
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="60%" height="143px" viewBox="0 0 577 143" enable-background="new 0 0 577 143" xml:space="preserve">
                    <path fill="#57659F" d="M44.265,78.123c-3.511,2.989-7.789,6.114-10.354,8.983c-1.945,2.176-3.084,3.729-4.276,6.348  c-1.604,3.524-3.68,10.214-3.524,13.135c0.082,1.514,0.428,2.643,1.147,3.158c0.709,0.509,2.057,0.463,3.313,0.096  c1.706-0.5,3.408-1.767,5.527-3.883c4.122-4.117,10.331-12.34,14.962-21.307c6.553-12.691,14.652-42.725,17.51-49.348  c0.769-1.78,1.231-2.095,1.747-3.102c0.089-0.175,0.303-0.244,0.478-0.154c0.174,0.089,0.243,0.303,0.154,0.478  c-0.556,1.084-0.761,1.533-1.468,3.171c-2.83,6.557-10.966,36.614-17.566,49.396c-4.668,9.04-10.956,17.392-15.126,21.557  c-2.168,2.165-4.061,3.594-5.94,4.143c-1.37,0.401-3.19,0.498-4.186-0.217c-0.996-0.714-1.498-2.289-1.586-3.933  c-0.167-3.106,1.984-10.035,3.615-13.619c1.237-2.718,2.481-4.388,4.458-6.6c2.645-2.959,7.143-5.912,10.625-8.876  c0.159-0.136,0.397-0.116,0.532,0.042C44.442,77.75,44.423,77.988,44.265,78.123z"/>
                    <path fill="#57659F" d="M25.15,48.234c0.299-0.357,0.255-0.847,1.055-1.461c1.917-1.472,8.293-4.298,12.913-6.019  c5.092-1.897,9.055-3.165,16.588-4.714c15.36-3.158,59.35-7.768,71.131-9.137c3.851-0.447,7.644-1.521,8.231-0.566  c0.413,0.674-0.863,1.648-1.208,2.183c-0.111,0.172-0.34,0.221-0.512,0.111c-0.172-0.111-0.221-0.34-0.11-0.512  c0.403-0.624,1.034-1.296,1.035-1.294c-0.215-0.35-3.391,0.592-7.324,1.049c-11.786,1.369-55.729,6.003-71.04,9.152  c-7.478,1.538-11.358,2.809-16.43,4.699c-4.59,1.709-10.824,4.473-12.643,5.87c-0.493,0.378-0.685,0.619-1.107,1.123  c-0.134,0.16-0.372,0.181-0.532,0.048C25.038,48.632,25.016,48.394,25.15,48.234z"/>
                    <path fill="#57659F" d="M75.468,59.951c-2.777,8.383-5.231,17.871-8.234,25.253c-2.462,6.051-8.04,15.251-7.969,15.296  c0.01,0.006,5.006-7.873,8.212-11.042c2.83-2.797,7.688-8.127,9.629-7.12c2.377,1.233-2.103,17.694-0.875,18.177  c0.986,0.388,4.765-6.63,8.081-10.016c3.637-3.716,9.017-8.227,12.329-10.919c2.097-1.705,3.377-2.988,5.468-4.068  c2.192-1.132,7.643-2.812,7.949-2.118c0.355,0.808-6.705,3.881-9.902,6.163c-3.767,2.686-8.424,6.143-11.214,9.878  c-2.6,3.481-6.199,10.429-5.531,11.07c0.525,0.504,5.358-2.698,8.071-4.531c2.749-1.858,5.473-4.302,7.672-6.627  c1.98-2.094,3.648-4.135,5.002-6.489c1.355-2.358,3.033-8.324,3.777-8.104c0.705,0.256-1.072,4.041-0.67,4.363  c1.333,1.066,18.512-11.129,20.438-8.943c2.252,2.555-17.574,27.541-16.976,28.005c0.599,0.469,20.785-23.962,22.683-22.708  c1.516,1.002-7.136,15.654-6.464,16.11c0.815,0.553,10.743-11.485,15.218-15.019c2.822-2.228,6.913-5.85,8.107-4.861  c1.77,1.467-10.553,22.366-9.506,23.061c1.31,0.87,17.569-20.146,23.724-24.37c3.014-2.07,7.785-3.88,8.207-3.145  c0.695,1.208-32.322,20.885-31.744,23.237c0.167,0.683,3.434,0.734,5.581,0.54c2.493-0.225,5.439-1.382,8.016-2.731  c2.696-1.413,4.85-3.449,7.742-5.754c3.755-2.993,12.381-10.3,12.54-10.095c0.184,0.238-10.955,8.807-11.542,8.083  c-0.722-0.891,24.687-23.241,24.764-23.15c0.103,0.121-10.19,5.664-10.66,8.816c-0.427,2.868,7.111,6.974,7.608,10.72  c0.399,3.011-1.599,5.752-3.003,8.417c-1.66,3.152-3.702,5.965-6.776,9.453c-4.707,5.34-13.251,14.677-20.084,18.621  c-5.455,3.149-11.001,3.365-16.35,5.017c-0.262,0.081-0.539-0.066-0.62-0.327c-0.081-0.262,0.066-0.539,0.327-0.62  c5.469-1.689,10.875-1.988,16.103-5.006c6.69-3.861,15.136-13.048,19.835-18.379c3.041-3.451,4.997-6.17,6.622-9.255  c1.44-2.733,3.217-5.195,2.875-7.779c-0.425-3.2-8.193-7.38-7.649-11.028c0.553-3.712,12.125-9.854,12.57-9.333  c0.597,0.697-24.792,23.067-24.722,23.153c-0.077-0.094,11.081-8.678,11.557-8.064c0.475,0.614-9.003,8.542-12.767,11.543  c-2.859,2.279-5.083,4.381-7.903,5.858c-2.626,1.376-5.76,2.59-8.394,2.828c-2.194,0.198-6.339,0.217-6.705-1.274  c-0.766-3.117,32.027-22.661,31.855-22.96c0.028,0.048-3.801,1.444-6.714,3.443c-6.024,4.135-22.746,25.848-24.883,24.429  c-1.889-1.255,10.524-22.248,9.435-23.151c-0.514-0.426-3.99,2.597-6.831,4.841c-4.392,3.468-14.818,16.182-16.414,15.099  c-1.479-1.003,7.207-15.655,6.49-16.129c-1.142-0.754-21.358,23.9-22.821,22.755c-1.484-1.164,18.589-26.302,16.903-28.216  c-1.319-1.496-18.376,10.631-20.319,9.077c-1.042-0.833,0.607-4.286,1.003-4.123c0.311,0.091-1.188,5.087-2.604,7.549  c-1.394,2.425-3.136,4.556-5.141,6.676c-2.226,2.355-5.031,4.872-7.837,6.768c-2.716,1.835-8.216,5.497-9.323,4.435  c-1.209-1.16,2.734-8.874,5.386-12.425c2.882-3.859,7.671-7.412,11.445-10.105c3.287-2.344,9.445-5.054,9.525-4.871  c0.078,0.179-4.395,1.473-6.506,2.563c-1.953,1.009-3.161,2.219-5.297,3.956c-3.306,2.688-8.643,7.163-12.247,10.843  c-3.215,3.284-7.293,11.088-9.19,10.342c-2.143-0.843,2.416-17.421,0.792-18.264c-1.227-0.636-5.601,4.079-8.448,6.893  c-3.124,3.089-8.565,11.813-9.477,11.239c-0.958-0.603,5.12-10.627,7.55-16.599c2.979-7.323,5.664-16.704,8.448-25.108  c0.071-0.213,0.301-0.329,0.515-0.258C75.423,59.507,75.539,59.738,75.468,59.951z"/>
                    <path fill="#57659F" d="M216.983,91.122c-0.539,0.313-1.388,1.398-2.105,1.179c-0.648-0.198-0.828-1.008-1.032-1.77  c-0.733-2.739-1.724-13.475-1.353-19.28c0.311-4.868,1.186-9.59,2.694-13.385c1.261-3.174,2.805-5.916,5.122-8.209  c2.488-2.463,6.015-4.664,9.633-5.861c3.94-1.303,10.402-2.421,13.553-1.221c2.233,0.851,3.615,3.055,4.543,4.785  c0.898,1.676,1.362,3.707,1.338,5.616c-0.026,2.016-0.341,4.604-1.726,6.481c-1.7,2.303-5.714,4.177-8.607,5.388  c-2.703,1.133-5.092,1.8-8.419,2.027c-4.748,0.324-11.587-1.2-17.297-1.774c-0.268-0.026-0.464-0.266-0.437-0.534  c0.027-0.269,0.266-0.464,0.535-0.437c5.764,0.578,12.529,1.995,17.126,1.682c3.218-0.22,5.438-0.84,8.08-1.946  c2.873-1.204,6.613-2.965,8.15-5.048c1.217-1.649,1.504-3.896,1.529-5.853c0.023-1.784-0.367-3.556-1.198-5.106  c-0.912-1.701-2.07-3.599-3.98-4.326c-2.891-1.101-9.014-0.086-12.883,1.194c-3.506,1.159-6.822,3.263-9.232,5.648  c-2.218,2.195-3.672,4.75-4.908,7.86c-1.472,3.705-2.319,8.273-2.626,13.083c-0.367,5.726,0.639,16.296,1.35,18.952  c0.21,0.783,0.265,1.033,0.343,1.057c0.111,0.034,0.785-0.498,1.421-0.868c0.183-0.106,0.419-0.044,0.526,0.14  C217.229,90.78,217.167,91.015,216.983,91.122z"/>
                    <path fill="#57659F" d="M238.76,89.077c-0.466,0.07-0.93,0.154-1.396,0.224c-0.283,0.043-0.547-0.152-0.589-0.435  c-0.043-0.283,0.152-0.547,0.435-0.589c0.466-0.07,0.935-0.125,1.401-0.195c0.275-0.041,0.531,0.148,0.572,0.423  S239.035,89.036,238.76,89.077z"/>
                    <path fill="#57659F" d="M278.409,43.582c0.051-0.301-0.291-1.194,0.338-1.529c0.886-0.473,2.869,1.386,4.692,1.892  c3.599,1,8.923,1.992,16.038,1.872c14.217-0.239,64.175-10.044,64.333-9.175c0.114,0.712-14.349,2.663-19.758,4.496  c-4.254,1.44-7.183,2.857-10.852,5.299c-4.5,2.995-9.033,6.945-13.676,11.986c-6.063,6.58-12.809,18.915-18.683,25.24  c-4.088,4.401-6.929,7.155-11.75,10.135c-5.978,3.695-14.693,6.99-22.057,9.221c-6.987,2.117-16.155,4.393-21.213,4.114  c-2.848-0.157-5.983-0.914-6.879-2.27c-0.711-1.075,0.403-2.447,0.502-3.432c0.014-0.138,0.137-0.239,0.275-0.225  c0.139,0.014,0.24,0.138,0.226,0.276c-0.11,1.093-0.478,2.27-0.126,2.802c0.666,1.009,3.31,1.619,6.061,1.77  c4.896,0.27,13.875-1.974,20.837-4.083c7.328-2.22,15.91-5.465,21.798-9.105c4.721-2.918,7.467-5.559,11.535-9.939  c5.782-6.226,12.552-18.541,18.701-25.216c4.683-5.083,9.31-9.116,13.867-12.149c3.728-2.481,6.775-3.971,11.092-5.434  c5.508-1.865,19.067-3.616,19.109-3.312c0.028,0.131-49.014,9.811-63.324,10.052c-7.22,0.121-12.697-0.884-16.342-1.896  c-2.08-0.578-3.69-2.143-3.926-2.018c0.073-0.038,0.033,0.297-0.044,0.757c-0.035,0.214-0.238,0.358-0.451,0.323  C278.518,43.998,278.374,43.796,278.409,43.582z"/>
                    <path fill="#57659F" d="M316.747,77.803c3.949,1.854,7.105,4.404,11.616,5.394c5.948,1.305,15.525,1.263,21.48-0.142  c4.618-1.088,8.958-3.368,11.606-5.682c1.93-1.687,4.205-4.518,3.791-5.177c-0.715-1.14-9.22,0.589-14.791,2.371  c-7.571,2.421-20.261,8.87-25.265,13.133c-2.747,2.339-4.373,4.66-5.07,6.822c-0.517,1.599-0.753,3.413-0.036,4.245  c0.909,1.053,4.061,1.096,6.562,0.973c2.954-0.146,6.478-1.33,9.732-2.592c3.451-1.339,6.361-2.967,10.261-5.343  c5.592-3.408,19.001-15.19,20.366-13.873c1.287,1.241-11.767,15.73-10.87,16.707c1.164,1.268,24.082-16.036,26.069-14.018  c1.591,1.615-7.841,12.62-8.02,15.088c-0.06,0.844,0.05,1.324,0.374,1.427c1.229,0.39,6.869-4.346,10.631-7.359  c4.424-3.543,8.794-7.816,13.517-12.825c5.873-6.229,19.187-20.627,18.547-21.378c-0.488-0.573-11.539,6.957-16.826,10.601  c-4.727,3.257-10.899,8.045-12.789,10.076c-0.725,0.779-1.079,1.011-1.039,1.104c0.685,1.567,25.832,0.577,26.956,4.154  c0.842,2.678-6.235,6.891-10.219,10.112c-5.158,4.171-19.114,13.216-19.486,12.687c-0.434-0.617,54.933-40.465,55.279-39.99  c0.336,0.472-24.774,17.897-30.192,22.822c-2.325,2.114-4.592,3.718-4.3,4.339c0.791,1.682,13.684,0.073,25.052-1.23  c23.196-2.66,85.208-16.74,105.063-20.324c7.829-1.413,10.955-1.705,16.411-2.617c0.197-0.033,0.384,0.1,0.417,0.297  c0.033,0.198-0.1,0.385-0.298,0.418c-5.467,0.914-8.55,1.454-16.356,2.864c-19.834,3.58-81.864,17.74-105.117,20.406  c-11.362,1.302-25.042,3.071-26.176,0.659c-0.69-1.467,2.303-3.544,4.577-5.611c5.471-4.974,29.79-21.799,30.07-21.404  c0.269,0.369-53.366,39.007-53.547,38.749c-0.225-0.321,12.818-8.758,17.933-12.894c4.042-3.268,10.409-7.108,9.83-8.95  c-0.87-2.768-25.916-1.796-26.901-4.049c-0.417-0.954,0.622-1.602,1.252-2.279c1.95-2.094,8.234-6.931,12.983-10.205  c5.29-3.645,17.121-11.688,18.212-10.407c1.236,1.452-12.728,16.508-18.604,22.74c-4.737,5.025-9.167,9.336-13.629,12.909  c-3.752,3.005-9.795,8.119-11.56,7.558c-0.859-0.273-1.186-1.458-1.113-2.476c0.204-2.814,9.272-13.35,8.341-14.295  c-1.359-1.38-24.306,15.984-26.116,14.012c-1.544-1.683,11.552-16.129,10.956-16.704c-0.708-0.683-13.487,10.565-19.154,14.018  c-3.916,2.386-6.905,4.058-10.421,5.422c-3.275,1.27-6.949,2.521-10.046,2.674c-2.53,0.125-6.188,0.107-7.407-1.307  c-1.025-1.188-0.715-3.563-0.169-5.254c0.746-2.313,2.552-4.864,5.398-7.288c5.099-4.343,17.995-10.83,25.639-13.274  c5.622-1.798,14.856-3.707,15.942-1.976c0.796,1.268-2.008,4.705-4.002,6.448c-2.733,2.389-7.279,4.794-12.021,5.912  c-6.065,1.43-15.866,1.488-21.923,0.159c-4.751-1.043-7.924-3.781-11.771-5.587c-0.218-0.102-0.312-0.362-0.21-0.581  C316.269,77.794,316.529,77.7,316.747,77.803z"/>
                </svg>
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
        <div class="company-info">
            <figure>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="50px" height="100px" viewBox="0 0 25 50" enable-background="new 0 0 25 50" xml:space="preserve">
                    <polygon fill="#EF7D1A" points="14.256,9.381 14.969,9.834 10.711,13.812 "/>
                    <polygon fill="#F3963A" points="3.041,35.959 5.51,20.599 12.479,31.02 "/>
                    <polygon fill="#F5A352" points="10.919,14.166 5.51,20.615 12.45,31.472 "/>
                    <polygon fill="#F7AF69" points="15.265,9.523 10.763,13.742 12.348,30.952 "/>
                    <polygon fill="#F8BC80" points="10.555,1.73 10.711,13.812 15.098,8.592 "/>
                    <polygon fill="#F3963A" points="15.848,16.463 23.081,24.475 15.315,29.287 "/>
                    <polygon fill="#EF7D1A" points="14.008,47.136 15.558,29.112 11.97,31.007 "/>
                    <polygon fill="#F7AF69" points="14.008,47.136 3.017,35.869 12.107,30.944 "/>
                    <polygon fill="#F7AF69" points="15.434,28.671 23.081,24.475 14.089,47.237 "/>
                    <polygon fill="#F18C2A" points="10.919,14.166 10.711,14.409 12.35,30.71 "/>
                    <polygon fill="#F0861F" points="5.857,20.238 5.51,20.615 12.271,31.183 "/>
                    <polygon fill="#F0861F" points="3.158,35.385 12.155,30.944 3,35.996 "/>
                    <polygon fill="#F0861F" points="23.081,24.475 15.315,29.287 15.338,28.717 "/>
                    <polygon fill="#F0861F" points="15.845,16.463 15.701,20.238 17.381,18.112 "/>
                    <polygon fill="#FACB99" points="20.042,14.746 17.381,18.112 15.845,16.463 "/>
                </svg>
            </figure>
            <h2>DRAGON LANCERS</h2>
            <h3>{{ trans('dragonlancers.ca') }}</h3>
            <p class="address">
                {!! trans('dragonlancers.address') !!}
                <a href="tel:+4531590062">+45 31 59 00 62</a> </br></br>
                <a href="mailto:hello@dragonlancers.com">Hello@DragonLancers.com</a>
            </p>
        </div>
    </section>


@stop