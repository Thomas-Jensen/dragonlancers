<?php namespace DragonLancers\Http\Controllers;

use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;

use DragonLancers\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subscriptions = Subscription::all();

        return view('subscriptions.home', compact('subscriptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('subscriptions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

        Subscription::create($input);

        return view('subscriptions.home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subscription = Subscription::where('id', $id)->firstOrFail();

        return view('subscriptions.show', compact('subscription'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $subscription = Subscription::where('id', $id)->firstOrFail();

        return view('subscriptions.edit', compact('subscription'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, request $request)
	{
		$subscription = Subscription::where('id', $id)->firstOrFail();

        $subscription->update($request::all());

        return view('subscriptions.show', compact('subscription'));
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
