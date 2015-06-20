<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Email extends Model {

    public static function start($client)
    {

        $data = $client->toArray();

        Mail::queue('emails.stages.start', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/start.title'));
        }
        );

    }

}
