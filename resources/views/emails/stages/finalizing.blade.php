@include('layouts.emails.stages',
[
    $title = trans('emails/stages/finalizing.title'),
    $header = trans('emails/stages/finalizing.header'),
    $image = asset('images/build/finalizing.png'),
    $body = trans('emails/stages/finalizing.body'),
])