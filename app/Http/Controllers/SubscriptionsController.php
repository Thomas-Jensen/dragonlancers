<?php namespace DragonLancers\Http\Controllers;

use DragonLancers\Client;
use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DragonLancers\Subscription;
use Request;

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
	public function create($id)
	{
        $client = Client::where('id', $id)->firstOrFail();

		return view('subscriptions.create', compact('client'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

        if (Input::hasFile('screen_shot'))
        {
            $file = Input::file('screen_shot');

            $name = time() . '-' . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/subscriptions/', $name);

            $input['screen_shot'] = $name;
        }
        elseif (Input::hasFile('screen_shot') == null)
        {
            $input['screen_shot'] = 'no-image.png';
        }

        Subscription::create($input);

        return redirect('subscriptions');
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

        if (Input::hasFile('screen_shot'))
        {
            $file = Input::file('screen_shot');

            $name = time() . '-' . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/subscriptions/', $name);

            $input['screen_shot'] = $name;
        }

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
        $subscription = Subscription::where('id', $id)->firstOrFail();

        $subscription->destroy();

        return view('subscriptions.home');
    }

}
