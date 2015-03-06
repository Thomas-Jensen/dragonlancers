<title>{{ $title }}</title>
<meta name="Description" content="{{ $description }}">

<!-- Schema.org markup -->
<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $descriptionSchemaorg }}">
<meta itemprop="image" content="https://www.dragonlancers.com/images/dllogo.png">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@dragonlancersco">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $descriptionTwitter }}">
<meta name="twitter:creator" content="@dragonlancersco">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="https://www.dragonlancers.com/images/dllogo.png">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title }}" />
<meta property="og:type" content="{{ $typeOpengraph }}" />
<meta property="og:url" content="{{ Request::URL()}}" />
<meta property="og:image" content="https://www.dragonlancers.com/images/dllogo.png" />
<meta property="og:description" content="{{ $descriptionOpengraph }}" />
<meta property="og:site_name" content="Dragon Lancers" />
<meta property="fb:admins" content="100001461555837"/>