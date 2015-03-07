@include('layouts.emails.stages',
[
    $title = trans('emails/stages/design.title'),
    $header = trans('emails/stages/design.header'),
    $image = asset('images/build/design.png'),
    $body = trans('emails/stages/design.body'),
])