@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <?php $slug = 'slug_'.$localeCode; ?>
    @if(isset($post)) <link rel="alternate" hreflang="{{$localeCode}}" href="{{Request::root(). '/'. $localeCode . '/blog/' . $article->$slug}}" />
    @else <link rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode)}}" />
    @endif
@endforeach