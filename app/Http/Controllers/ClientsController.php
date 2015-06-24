<?php namespace DragonLancers\Http\Controllers;

use DragonLancers\Client;
use DragonLancers\User;
use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;
use Request;

class ClientsController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::all();

        return view('clients.home', compact('clients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

        $input['code'] = $password = str_random(10);

        $input['password'] = bcrypt($input['code']);

        $input['slug'] =str_slug(Request::get('name'), '-');

        Client::create($input);

        $name = Request::get('name');

        $input['client_id'] = Client::where('name',$name)->firstOrFail()->id;

        User::create($input);

        $client = Client::where('name',$name)->firstOrFail();

        EmailController::client($client, $input);

        return redirect('clients');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$client = Client::where('id', $id)->firstOrFail();

        $subscriptions = $client->subscriptions;

        $projects = $client->projects;

        $invoices = $client->invoices;

        return view('clients.show', compact('client', 'subscriptions', 'projects', 'invoices'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $client = Client::where('id', $id)->firstOrFail();

        return view('clients.edit', compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, request $request)
	{
        $client = Client::where('id', $id)->firstOrFail();

        $client->update($request::all());

        return view('clients.show', compact('client'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $client = Client::where('id', $id)->firstOrFail();

        $client->delete();

        return redirect('clients');

    }

}
