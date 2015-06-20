<?php namespace DragonLancers\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function contact()
    {

        //Get all data and store it in data variable
        $data = Input::all();

        //Setup rules in a rules array
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'messages' => 'required|min:5'
        );

        //initialize a new instance of validator with our data and rules
        $validation = Validator::make ($data, $rules);

        //run our validation against rules if passes send mail
        if ($validation -> passes())
        {

        Mail::queue('emails.form.contact', $data, function($message) use ($data)
            {
                $message->from($data['email'], $data['name']);
                $message->to('hello@dragonlancers.com')->subject('Dragon Lancers contact form');
            }
        );
		Mail::queue('emails.form.welcome', $data, function($message) use ($data)
            {
                $message->from('welcome@dragonlancers.com', 'Dragon Lancers');
                $message->to($data['email'])->subject(trans('emails/welcome.welcome-title'));
            }
		);
        return redirect('success');
        }
        else{
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }


    /**
     * Send a cold mail
     *
     * @return string
     */
    public function cold()
    {
        //Get all data and store it in data variable
        $data = Input::all();
        if (Input::get('lang') == 'da')
        {
            App::setLocale('da');
        }
        else
        {
            App::setLocale('en');
        }

        //Setup rules in a rules array
        $rules = array(
            'lang' => 'required',
            'email' => 'required|email',
            'name' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'body' => 'required',
            'closing' => 'required'
        );

        //initialize a new instance of validator with our data and rules
        $validation = Validator::make ($data, $rules);

        //run our validation against rules if passes send mail
        if ($validation -> passes())
        {

            Mail::queue('emails.cold', $data, function($message) use ($data)
            {
                $message->from('thomas@dragonlancers.com', 'Thomas Jensen');
                $message->to($data['email'])->subject($data['title']);
            }
            );

            return ('success');
        }
        else{
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }


    /**
     * Send the Project Start Email
     *
     * @param $client
     */
    public static function start($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.start', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/start.title'));
        }
        );
    }


    /**
     * Send the Project Planning stage Email
     *
     * @param $client
     */
    public static function planning($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.planning', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/planning.title'));
        }
        );
    }



    /**
     * Send the Project Design stage Email
     *
     * @param $client
     */
    public static function design($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.design', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/design.title'));
        }
        );
    }


    /**
     * Send the Project Development stage Email
     *
     * @param $client
     */
    public static function development($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.development', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/development.title'));
        }
        );
    }


    /**
     * Send the Project Finalizing stage Email
     *
     * @param $client
     */
    public static function finalizing($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.finalizing', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/finalizing.title'));
        }
        );
    }


    /**
     * Send the Project Launch stage Email
     *
     * @param $client
     */
    public static function launch($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.launch', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/launch.title'));
        }
        );
    }


    /**
     * Send the Project Finish Email
     *
     * @param $client
     */
    public static function finish($client)
    {
        App::setLocale($client->language);

        $data = $client->toArray();

        Mail::queue('emails.stages.finish', $data, function($message) use ($data)
        {
            $message->from('status@dragonlancers.com', 'Dragon Lancers');
            $message->to($data['email'])->subject(trans('emails/stages/finish.title'));
        }
        );
    }



	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
