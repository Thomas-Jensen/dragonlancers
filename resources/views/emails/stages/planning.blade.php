@include('layouts.emails.stages',
[
    $title = trans('emails/stages/planning.title'),
    $header = trans('emails/stages/planning.header'),
    $image = asset('images/build/planning.png'),
    $body = trans('emails/stages/planning.body'),
])