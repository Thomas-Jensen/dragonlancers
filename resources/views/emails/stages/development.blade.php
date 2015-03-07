@include('layouts.emails.stages',
[
    $title = trans('emails/stages/development.title'),
    $header = trans('emails/stages/development.header'),
    $image = asset('images/build/development.png'),
    $body = trans('emails/stages/development.body'),
])