@include('layouts.emails.stages',
[
    $title = trans('emails/stages/start.title'),
    $header = trans('emails/stages/start.header'),
    $image = asset('images/build/start.png'),
    $body = trans('emails/stages/start.body'),
])