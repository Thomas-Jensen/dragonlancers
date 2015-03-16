<?php namespace DragonLancers\Http\Controllers;

use DragonLancers\Client;
use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;
use DragonLancers\Invoice;
use Request;

class InvoicesController extends Controller {


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
		$invoices = Invoice::all();

        return view('invoices.home', compact('invoices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
        $client = Client::where('id', $id)->firstOrFail();

		return view('invoices.create', compact('client'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

        Invoice::create($input);

        return redirect('invoices');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invoice = Invoice::where('id', $id)->firstOrFail();

        return view('invoices.show', compact('invoice'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $invoice = Invoice::where('id', $id)->firstOrFail();

        return view('invoices.edit', compact('invoice'));

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, request $request)
	{
        $invoice = Invoice::where('id', $id)->firstOrFail();

        $invoice->update($request::all());

        return redirect('invoices.show', compact('invoice'));

    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $invoice = Invoice::where('id', $id)->firstOrFail();

        $invoice->destroy();

        return view('invoices.home');
    }

}
