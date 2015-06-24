<?php namespace DragonLancers\Http\Controllers;

use DragonLancers\Client;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {



    public function __construct()
    {
        $this->middleware('auth', ['only' => ['client', 'coldMail']]);
        $this->middleware('admin', ['only' => ['coldMail']]);
    }



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('home');
	}

    public function success()
    {
        return view('confirmations.form.success');
    }


	public function services()
	{
		return view('services');
	}

	public function work()
	{
		return view('errors.coming');
	}

	public function about()
	{
		return view('about');
	}


	public function blog()
	{
		return view('blog.home');
	}

	public function single()
	{
		return view('blog.single');
	}


	public function coming()
	{
		return view('errors.coming');
	}


	public function browser()
	{
		return view('errors.browser');
	}


    public function coldMail()
    {
        return view('emails.coldmail');
    }


    public function client()
    {
        $client = Client::where('id', Auth::user()->client_id)->firstOrFail();

        $subscriptions = $client->subscriptions;

        $projects = $client->projects;

        $invoices = $client->invoices;

        return view('clients.frontend', compact('client', 'subscriptions', 'projects', 'invoices'));
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
