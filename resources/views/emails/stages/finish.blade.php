@include('layouts.emails.stages',
[
    $title = trans('emails/stages/finish.title'),
    $header = trans('emails/stages/finish.header'),
    $image = asset('images/build/finish.png'),
    $body = trans('emails/stages/finish.body'),
])