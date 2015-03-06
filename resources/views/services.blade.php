@extends('layouts.default.default')


@include('layouts.default.meta',
[
    $title = 'Dragon Lancers | ' . trans('title.services'),
    $description = trans('description.services'),
    $descriptionSchemaorg  = trans('description.services-schemaorg'),
    $descriptionTwitter = trans('description.services-twitter'),
    $typeOpengraph = 'website',
    $descriptionOpengraph = trans('description.services-opengraph'),
])


@section('content')

<figure class="blue-ink">
    <img src="{{ asset('images/build/blue-ink-services.png') }}" width="100%" alt="blue ink">
</figure>
<section class="services-links">
    <figure class="services-print"><svg xmlns="http://www.w3.org/2000/svg"  version="1.1" id="Layer_1" x="0px" y="0px" width="7.688em" height="7.688em" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<g>
    <path fill="#00ACEE" d="M107.003,100.264c-0.021-6.328,1.35-12.323,4.578-17.79c6.021-10.197,14.95-16.24,26.733-17.37   c20.181-1.936,35,12.436,37.694,28.49c0.358,2.14,0.607,4.277,0.438,6.448c-0.58,0.212-1.034-0.137-1.488-0.375   c-6.128-3.199-12.695-4.18-19.492-3.627c-3.716,0.302-7.307,1.329-10.696,2.953c-0.846,0.406-1.659,0.883-2.541,1.215   c-0.202,0.054-0.404,0.056-0.608,0.013c-2.444-1.125-4.84-2.354-7.468-3.053c-8.86-2.36-17.377-1.528-25.561,2.631   c-0.399,0.204-0.771,0.465-1.216,0.572C107.233,100.396,107.11,100.359,107.003,100.264z"/>
    <path fill="#EC018B" d="M176.536,100.245c7.409,4.266,12.496,10.485,15.362,18.499c7.441,20.809-6.336,43.213-28.363,46.042   c-7.344,0.942-14.385-0.259-20.942-3.843c-0.175-0.098-0.327-0.233-0.488-0.352c-0.071-0.584,0.409-0.75,0.771-0.979   c6.196-3.896,10.712-9.246,13.59-15.943c1.504-3.504,2.401-7.188,2.513-11.029c0.029-0.98,0.26-1.937,0.321-2.913   c0.034-0.124,0.089-0.237,0.161-0.343c2.837-1.862,5.494-3.942,7.773-6.474c4.775-5.301,7.715-11.459,8.658-18.547   c0.142-1.05,0.289-2.098,0.262-3.165C176.145,100.849,176.116,100.444,176.536,100.245z"/>
    <path fill="#FDF100" d="M141.743,160.54c-3.575,2.271-7.529,3.581-11.671,4.147c-7.985,1.09-15.587-0.125-22.686-4.162   c-11.778-6.698-18.771-20.231-17.271-33.68c1.256-11.26,6.727-19.918,16.197-26.084c0.237-0.155,0.461-0.331,0.691-0.497   c0.024,0.041,0.058,0.071,0.1,0.09c0.625,1.168,0.32,2.47,0.497,3.703c1.529,10.662,6.824,18.889,15.798,24.79   c0.34,0.224,0.699,0.425,0.949,0.762c0.069,0.108,0.118,0.225,0.15,0.347c0.363,4.471,0.857,8.908,2.59,13.119   c2.833,6.884,7.394,12.307,13.589,16.389C141.103,159.744,141.676,159.898,141.743,160.54z"/>
    <path fill="#ED1D25" d="M141.743,160.54c-3.766-2.338-7.146-5.122-9.885-8.636c-5.038-6.461-7.574-13.776-7.476-21.988   c0.578-0.233,1.03,0.123,1.487,0.356c4.538,2.298,9.308,3.6,14.424,3.792c5.915,0.223,11.495-0.901,16.801-3.495   c0.747-0.366,1.424-0.995,2.365-0.831c0.014,4.891-0.805,9.632-2.73,14.137c-1.761,4.118-4.177,7.84-7.377,10.988   c-1.942,1.91-4.001,3.707-6.396,5.063c-0.313,0.176-0.686,0.289-0.849,0.664C141.984,160.575,141.863,160.559,141.743,160.54z"/>
    <path fill="#2E3191" d="M176.536,100.245c-0.151,8.11-2.808,15.315-7.929,21.586c-2.543,3.111-5.512,5.764-9.056,7.72   c-0.501-0.349-0.542-0.891-0.556-1.42c-0.159-6.499-2.486-12.282-6.053-17.576c-2.552-3.788-5.836-6.904-9.736-9.339   c-0.45-0.282-1.116-0.413-1.087-1.164c3.608-2.282,7.599-3.552,11.776-4.138c7.597-1.064,14.858,0.069,21.668,3.72   c0.285,0.153,0.588,0.273,0.881,0.409C176.49,100.103,176.52,100.17,176.536,100.245z"/>
    <path fill="#37363A" d="M142.119,100.052c1.975,1.418,3.997,2.759,5.828,4.385c2.994,2.657,5.373,5.77,7.269,9.262   c2.479,4.566,4.023,9.408,4.114,14.654c0.006,0.4,0.146,0.798,0.222,1.198c-0.017,0.069-0.047,0.132-0.092,0.188   c-4.162,2.242-8.509,3.881-13.25,4.45c-7.045,0.844-13.727-0.246-20.073-3.412c-0.583-0.291-1.169-0.573-1.754-0.861   c-0.048-0.065-0.086-0.134-0.113-0.21c-0.375-1.164-0.163-2.36-0.016-3.501c0.957-7.436,3.896-13.976,8.968-19.545   c2.041-2.241,4.31-4.191,6.844-5.839c0.508-0.331,1.003-0.708,1.644-0.762C141.846,100.057,141.982,100.054,142.119,100.052z"/>
    <path fill="#00A650" d="M141.709,100.059c-2.167,1.516-4.359,2.983-6.304,4.808c-4.067,3.813-7.005,8.339-8.973,13.536   c-1.381,3.647-1.878,7.452-2.163,11.303c-8.688-5.129-14.106-12.658-16.413-22.444c-0.533-2.263-0.88-4.564-0.753-6.908   c3.271-2.171,6.917-3.444,10.726-4.166c7.961-1.508,15.617-0.539,22.853,3.231C141.039,99.605,141.368,99.845,141.709,100.059z"/>
</g>
            <rect x="70" y="193" fill="none" width="158" height="45"/>
            <text transform="matrix(1 0 0 1 70 225.8994)" font-family="'NixieOne'" font-size="47">PRINT</text>
</svg></figure>
    <figure class="services-web">
        <svg xmlns="http://www.w3.org/2000/svg"  version="1.1" id="Layer_1" x="0px" y="0px" width="7.688em" height="7.688em" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<g>
    <path display="none" fill="#FEFEFE" d="M88.864,118.771c0-17.403,0.009-34.805-0.024-52.207c-0.002-1.009,0.136-1.301,1.253-1.3   c34.923,0.041,69.848,0.041,104.771,0.001c1.176-0.001,1.333,0.343,1.333,1.395c-0.027,34.863-0.027,69.728,0.002,104.59   c0,1.068-0.182,1.389-1.342,1.387c-34.925-0.037-69.847-0.037-104.771,0.004c-1.135,0.002-1.247-0.314-1.244-1.306   C88.873,153.813,88.864,136.291,88.864,118.771z"/>
    <path fill="#FE0000" d="M110.33,103.924c-2.502-17.007,8.945-33.092,25.425-36.965c18.274-4.295,37.005,8.004,40.171,26.543   c0.626,3.664,0.763,7.297,0.125,10.958c-0.813,0.315-1.501-0.128-2.219-0.372c-9.303-3.155-18.329-2.565-27.077,1.964   c-1.105,0.573-2.033,1.453-3.244,1.838c-0.197,0.034-0.392,0.018-0.583-0.041c-4.368-2.86-9.03-4.961-14.254-5.717   c-5.51-0.796-10.881-0.328-16.139,1.497C111.826,103.876,111.135,104.356,110.33,103.924z"/>
    <path fill="#0000FE" d="M176.262,104.645c13.077,5.873,20.937,19.553,19.396,33.808c-1.796,16.636-14.847,27.842-28.744,29.583   c-8.096,1.014-15.56-0.655-22.448-4.978c-0.544-0.342-1.162-0.606-1.499-1.213c0.113-0.812,0.824-1.107,1.353-1.555   c7.74-6.546,11.948-14.809,12.173-25.013c0.038-1.772-0.07-3.541-0.086-5.313c0.287-0.733,0.972-0.994,1.595-1.325   c9.034-4.796,14.803-12.138,17.248-22.085C175.42,105.853,175.303,104.95,176.262,104.645z"/>
    <path fill="#00FE00" d="M142.637,161.854c-3.976,3.219-8.636,4.918-13.59,5.674c-18.285,2.793-34.678-8.769-38.229-26.833   c-2.934-14.928,5.561-30.94,19.379-36.527c0.621,0.298,0.719,0.898,0.844,1.477c2.259,10.514,8.215,18.194,17.73,23.148   c0.316,0.164,0.628,0.335,0.865,0.615c0.102,0.157,0.17,0.327,0.208,0.509c-0.617,6.05-0.206,11.966,2.196,17.65   c2.098,4.961,5.176,9.188,9.254,12.698C141.826,160.723,142.494,161.066,142.637,161.854z"/>
    <path fill="#00FEFE" d="M142.637,161.854c-9.762-7.595-14.162-17.598-13.401-29.903c0.042-0.704,0.239-1.396,0.364-2.091   c0.631-0.506,1.27-0.163,1.851,0.054c7.841,2.938,15.673,2.944,23.511,0.003c0.389-0.146,0.794-0.25,1.217-0.259   c0.208,0.001,0.388,0.076,0.534,0.223c1.345,13.205-3.06,23.937-13.745,31.966c-0.001,0-0.164,0.055-0.164,0.055L142.637,161.854z"/>
    <path fill="#FEFE00" d="M129.451,129.522c-10.256-4.708-16.338-12.744-18.85-23.628c-0.133-0.577-0.27-1.152-0.404-1.728   c0.016-0.096,0.061-0.177,0.133-0.243c5.09-2.009,10.354-3.015,15.828-2.557c6.204,0.519,11.924,2.422,16.915,6.256   c0.273,0.801-0.445,1.024-0.857,1.353c-6.206,4.96-10.218,11.285-11.931,19.054C130.158,128.609,130.051,129.204,129.451,129.522z"/>
    <path fill="#FE00FE" d="M176.262,104.645c-0.896,2.993-1.56,6.05-2.94,8.896c-3.318,6.836-8.313,12.005-15.069,15.477   c-0.522,0.27-1.026,0.576-1.539,0.862c-0.056-0.048-0.115-0.097-0.175-0.144c-0.494-0.566-0.549-1.293-0.695-1.979   c-1.599-7.509-5.453-13.647-11.265-18.603c-0.489-0.417-1.087-0.752-1.104-1.512c9.587-6.577,19.877-7.607,30.766-3.893   c0.612,0.209,1.209,0.472,1.813,0.711C176.176,104.468,176.246,104.53,176.262,104.645z"/>
    <path fill="#FEFEFE" d="M143.474,107.642c3.954,3.25,7.405,6.928,9.74,11.541c1.688,3.333,2.988,6.792,3.323,10.552   c-7.947,3.595-16.039,3.781-24.253,1.011c-0.894-0.3-1.79-0.593-2.685-0.889c-0.05-0.111-0.1-0.224-0.148-0.335   c1.178-5.63,3.311-10.822,6.925-15.362c1.962-2.465,4.37-4.457,6.697-6.538C143.207,107.629,143.34,107.636,143.474,107.642z"/>
</g>
            <rect x="88" y="195" fill="none" width="116" height="43"/>
            <text transform="matrix(1 0 0 1 88 227.8994)" font-family="'NixieOne'" font-size="47">WEB</text>
</svg>
    </figure>
    <figure class="services-apps">
        <svg xmlns="http://www.w3.org/2000/svg"  version="1.1" id="Layer_1" x="0px" y="0px" width="7.688em" height="7.688em" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<g>
    <path fill="#2DDFE8" d="M116,80.578c0,3.547-2.875,6.422-6.422,6.422H86.422C82.875,87,80,84.125,80,80.578V58.422   C80,54.875,82.875,52,86.422,52h23.156c3.547,0,6.422,2.875,6.422,6.422V80.578z"/>
    <path fill="#EACA2A" d="M160,124.578c0,3.547-2.875,6.422-6.422,6.422h-23.156c-3.547,0-6.422-2.875-6.422-6.422v-22.156   c0-3.547,2.875-6.422,6.422-6.422h23.156c3.547,0,6.422,2.875,6.422,6.422V124.578z"/>
    <path fill="#E8922D" d="M204,124.578c0,3.547-2.875,6.422-6.421,6.422h-23.158c-3.546,0-6.421-2.875-6.421-6.422v-22.156   c0-3.547,2.875-6.422,6.421-6.422h23.158c3.546,0,6.421,2.875,6.421,6.422V124.578z"/>
    <path fill="#A9EA2A" d="M204,80.579c0,3.546-2.875,6.421-6.421,6.421h-23.158c-3.546,0-6.421-2.875-6.421-6.421V58.421   c0-3.546,2.875-6.421,6.421-6.421h23.158c3.546,0,6.421,2.875,6.421,6.421V80.579z"/>
    <path fill="#2AEA77" d="M160,80.579c0,3.546-2.875,6.421-6.422,6.421h-23.156c-3.547,0-6.422-2.875-6.422-6.421V58.421   c0-3.546,2.875-6.421,6.422-6.421h23.156c3.547,0,6.422,2.875,6.422,6.421V80.579z"/>
    <path fill="#EDED29" d="M116,124.578c0,3.547-2.875,6.422-6.422,6.422H86.422c-3.547,0-6.422-2.875-6.422-6.422v-22.156   C80,98.875,82.875,96,86.422,96h23.156c3.547,0,6.422,2.875,6.422,6.422V124.578z"/>
    <path fill="#EA772A" d="M116,167.579c0,3.546-2.875,6.421-6.422,6.421H86.422c-3.547,0-6.422-2.875-6.422-6.421v-22.158   c0-3.546,2.875-6.421,6.422-6.421h23.156c3.547,0,6.422,2.875,6.422,6.421V167.579z"/>
    <path fill="#8AF9F9" d="M110,77.456c0,2.51-2.035,4.544-4.545,4.544h-15.91C87.035,82,85,79.965,85,77.456V61.544   C85,59.034,87.035,57,89.545,57h15.91c2.51,0,4.545,2.035,4.545,4.544V77.456z"/>
    <path fill="#73FFAC" d="M155,77.456c0,2.51-2.035,4.544-4.545,4.544h-15.91c-2.51,0-4.545-2.034-4.545-4.544V61.544   c0-2.51,2.035-4.544,4.545-4.544h15.91c2.51,0,4.545,2.034,4.545,4.544V77.456z"/>
    <path fill="#D2F973" d="M198,77.809c0,2.314-2.083,4.191-4.653,4.191h-15.692c-2.57,0-4.653-1.876-4.653-4.191V61.191   c0-2.314,2.083-4.191,4.653-4.191h15.692c2.57,0,4.653,1.876,4.653,4.191V77.809z"/>
    <path fill="#FCF870" d="M112,121.622c0,2.509-2.378,4.378-4.889,4.378H90.753c-2.51,0-4.753-1.869-4.753-4.378v-15.634   c0-2.509,2.243-4.987,4.753-4.987h16.358c2.511,0,4.889,2.478,4.889,4.987V121.622z"/>
    <path fill="#FFE473" d="M155,121.456c0,2.51-2.035,4.544-4.545,4.544h-15.91c-2.51,0-4.545-2.034-4.545-4.544v-15.912   c0-2.51,2.035-4.544,4.545-4.544h15.91c2.51,0,4.545,2.034,4.545,4.544V121.456z"/>
    <path fill="#F9A450" d="M199,121.52c0,2.509-2.232,4.48-4.743,4.48h-16.325c-2.511,0-4.932-1.971-4.932-4.48v-15.749   c0-2.51,2.421-4.771,4.932-4.771h16.325c2.511,0,4.743,2.261,4.743,4.771V121.52z"/>
    <path fill="none" d="M110,164.456c0,2.51-2.035,4.544-4.545,4.544h-15.91c-2.51,0-4.545-2.034-4.545-4.544v-15.912   c0-2.51,2.035-4.544,4.545-4.544h15.91c2.51,0,4.545,2.034,4.545,4.544V164.456z"/>
</g>
            <rect x="78" y="187.5" fill="none" width="146" height="61"/>
            <text transform="matrix(1 0 0 1 78 220.3994)" font-family="'NixieOne'" font-size="47">APPS</text>
</svg>
    </figure>
    <figure class="services-subs">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
             width="123px" height="123px" viewBox="0 0 123 123" enable-background="new 0 0 123 123" xml:space="preserve">
<path fill="#00ACEE" d="M86.298,29.13H37.556c-1.26,0-2.285,0.754-2.285,1.686c0,0.932,1.024,1.686,2.285,1.686h48.742
	c1.261,0,2.286-0.754,2.286-1.686C88.583,29.884,87.559,29.13,86.298,29.13z"/>
            <path fill="#00ACEE" d="M86.298,42.723H37.556c-1.26,0-2.285,0.755-2.285,1.686c0,0.933,1.024,1.686,2.285,1.686h48.742
	c1.261,0,2.286-0.754,2.286-1.686C88.583,43.478,87.559,42.723,86.298,42.723z"/>
            <path fill="#00ACEE" d="M86.754,55.466H38.012c-1.261,0-2.285,0.754-2.285,1.685c0,0.933,1.023,1.687,2.285,1.687h48.742
	c1.261,0,2.285-0.754,2.285-1.687C89.038,56.22,88.015,55.466,86.754,55.466z"/>
            <rect x="35.865" y="71.406" fill="none" width="85.055" height="17.696"/>
            <text transform="matrix(1 0 0 1 35.8652 84.3651)" font-family="'NixieOne'" font-size="18.2529">{{ trans('navigation.subscripe') }}</text>
</svg>
    </figure>
</section>
<section class="wrapper-services">
    <section class="service-content">
        <article>
            <p class="service-txt-print">
                {{ trans('services.service-txt-print') }}
            </p>
            <p class="service-txt-web">
                {{ trans('services.service-txt-web') }}
            </p>
            <p class="service-txt-apps">
                {{ trans('services.service-txt-apps') }}
            </p>
            <p class="service-txt-subs">
                {{ trans('services.service-txt-subs') }}
            </p>
            <a class="service-contact" href="{{ trans('routes.home') }}#contact"><p>{{ trans('navigation.get-in-touch') }}</p></a>
        </article>

    </section>

    <section class="service-showcase">
        <figure>
            <picture class="service-img-print">
                <source media="(max-width:800px)" srcset="{{ asset('images/build/print-service.jpg') }}">
                <source media="(min-width:800px)" srcset="{{ asset('images/build/services-print-picture.jpg') }}">
                <img src="{{ asset('images/build/services-print-picture.jpg') }}" width="100%">
            </picture>
            <picture class="service-img-web">
                <source media="(max-width:800px)" srcset="{{ asset('images/build/web.jpg') }}">
                <source media="(min-width:800px)" srcset="{{ asset('images/build/services-web-picture.jpg') }}">
                <img src="{{ asset('images/build/services-web-picture.jpg') }}" width="100%">
            </picture>
            <picture class="service-img-apps">
                <source media="(max-width:800px)" srcset="{{ asset('images/build/apps.jpg') }}">
                <source media="(min-width:800px)" srcset="{{ asset('images/build/services-apps-picture.jpg') }}">
                <img src="{{ asset('images/build/services-apps-picture.jpg') }}" width="100%">
            </picture>
            <picture class="service-img-subs">
                <source media="(max-width:800px)" srcset="{{ asset('images/build/subs.jpg') }}">
                <source media="(min-width:800px)" srcset="{{ asset('images/build/services-subscriptions-picture.jpg') }}">
                <img src="{{ asset('images/build/services-subscriptions-picture.jpg') }}" width="100%">
            </picture>
        </figure>
    </section>
</section>


<script>
    $(document).ready(function(){
        $('.service-contact').removeClass('clicked');
        // $('.services-print').addClass('active-svg');
        $('.services-link').toggleClass('active');
    });
</script>


<?php

if (isset($_GET['s'])) {
echo "<script>$(document).ready(function(){
 $('" . ".services-" . $_GET['s'] . "').addClass('active-svg');
 });</script>"
        ;}
?>

<?php
if (isset($_GET['s'])) {
if ($_GET['s'] === 'print')
    echo "<script>$(document).ready(function(){
$('.service-txt-print').show();
$('.service-img-print').show();
 });</script>";

elseif ($_GET['s'] === 'web')
    echo "<script>$(document).ready(function(){
$('.service-txt-web').show();
$('.service-img-web').show();
 });</script>";

elseif ($_GET['s'] === 'apps')
    echo "<script>$(document).ready(function(){
$('.service-txt-apps').show();
$('.service-img-apps').show();
 });</script>";

elseif ($_GET['s'] === 'subs')
    echo "<script>$(document).ready(function(){
$('.service-txt-subs').show();
$('.service-img-subs').show();
 });</script>";
    ;}
?>


<?php

if (!isset($_GET['s'])) {
    echo "<script>$(document).ready(function(){
$('.services-print').addClass('active-svg');
$('.service-txt-print').show();
$('.service-img-print').show();
 });</script>";
    }
?>



@stop