<?php namespace DragonLancers\Http\Controllers;


use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;
use DragonLancers\Author;
use Illuminate\Support\Facades\Input;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Request;

class AuthorsController extends Controller {




    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'store', 'update']]);
    }



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authors = Author::all();

        return view('blog.authors.home', compact('authors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('blog.authors.create');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
        $input['slug_author'] = str_slug(Request::get('author'), '-');

        if (Input::hasFile('image'))
        {
            $file = Input::file('image');

            $name = time() . '-' . $input['slug_author'] . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/authors/', $name);

            $input['image'] = $name;
        }
        elseif (Input::hasFile('image') == null)
        {
            $input['image'] = 'noimage.png';
        }

        Author::create($input);

        return redirect('blog/authors');



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
	public function edit($slug_author)
	{
        $author = Author::where('slug_author', $slug_author)->firstOrFail();

		return view('blog.authors.edit', compact('author'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug_author)
	{
        $input = Request::all();

        $author = Author::where('slug_author', $slug_author)->firstOrFail();

        if (Input::hasFile('image'))
        {
            $file = Input::file('image');

            $name = time() . '-' . $input['slug_author'] . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/authors/', $name);

            $input['image'] = $name;
        }

        $author->update($input);

        return redirect('blog/authors');

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
