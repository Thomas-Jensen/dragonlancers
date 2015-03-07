@include('layouts.emails.stages',
[
    $title = trans('emails/stages/launch.title'),
    $header = trans('emails/stages/launch.header'),
    $image = asset('images/build/launch.png'),
    $body = trans('emails/stages/launch.body'),
])