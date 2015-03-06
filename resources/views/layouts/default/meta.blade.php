<title>{{ $title }}</title>
<meta name="Description" content="{{ $description }}">

<!-- Schema.org markup -->
<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $descriptionSchemaorg }}">
<meta itemprop="image" content="{{ $image }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@dragonlancersco">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $descriptionTwitter }}">
<meta name="twitter:creator" content="@dragonlancersco">
<!-- Twitter summary card -->
<meta name="twitter:image:src" content="{{ $image }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title }}" />
<meta property="og:type" content="{{ $typeOpengraph }}" />
<meta property="og:url" content="{{ Request::URL()}}" />
<meta property="og:image" content="{{ $image }}" />
<meta property="og:description" content="{{ $descriptionOpengraph }}" />
<meta property="og:site_name" content="Dragon Lancers" />
<meta property="og:locale" content="@if(laravelLocalization::getCurrentLocale() == 'da') {{ 'da_DK' }} @else {{ 'en_US' }}@endif" />
<meta property="og:locale:alternate" content="@if(laravelLocalization::getCurrentLocale() == 'da') {{ 'en_US' }} @else {{ 'da_DK' }}@endif" />
<meta property="fb:admins" content="100001461555837"/>