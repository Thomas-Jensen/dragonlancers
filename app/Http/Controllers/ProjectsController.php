<?php namespace DragonLancers\Http\Controllers;

use DragonLancers\Client;
use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;
use DragonLancers\Project;
use Illuminate\Support\Facades\Input;
use Request;

/**
 * Class ProjectsController
 * @package DragonLancers\Http\Controllers
 */
class ProjectsController extends Controller {


    /**
     *
     */
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
		$projects = Project::all();

        return view('projects.home', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
     * @param int $id
     *
	 * @return Response
	 */
	public function create($id)
	{
        $client = Client::where('id', $id)->firstOrFail();

		return view('projects.create', compact('client'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

        Project::create($input);

        $data = Input::all();

        if($data['client_id'] == 'start')
        {

            $id = $data['client_id'];

            $client = Client::where('id', $id)->firstOrFail();

            EmailController::start($client);
        }

        return redirect('projects');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::where('id', $id)->firstOrFail();

        return view('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $clients = Client::all();

        $project = Project::where('id', $id)->firstOrFail();

        return view('projects.edit', compact('project', 'clients'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, request $request)
	{
        $project = Project::where('id', $id)->firstOrFail();

        $project->update($request::all());

        $client = $project->client;

        $status = $project->status;

        EmailController::$status($client);

        return view('projects.show', compact('project'));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $project = Project::where('id', $id)->firstOrFail();

        $project->delete();

        return view('projects.home');
    }

}
