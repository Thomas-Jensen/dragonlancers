<?php namespace DragonLancers\Http\Controllers;

use Carbon\Carbon;
use DragonLancers\Author;
use DragonLancers\Http\Requests;
use DragonLancers\Http\Controllers\Controller;
use DragonLancers\Article;
use Illuminate\Support\Facades\Input;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArticlesController extends Controller {




    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'update', 'store', 'admin']]);
    }




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $articles = Article::latest('published_at')->published()->get();

		return view('blog.home', compact('articles'));
	}


    public function admin()
    {
        $articles = Article::oldest('published_at')->UnPublished()->get();

        return view('blog.admin', compact('articles'));
    }


    public function php()
    {
        $articles = Article::latest('published_at')->published()->Php()->get();

        $category = 'php';

        return view('blog.category', compact('articles', 'category'));
    }

    public function html()
    {
        $articles = Article::latest('published_at')->published()->Html()->get();

        $category = 'html';

        return view('blog.category', compact('articles', 'category'));
    }

    public function javascript()
    {
        $articles = Article::latest('published_at')->published()->Javascript()->get();

        $category = 'javascript';

        return view('blog.category', compact('articles', 'category'));
    }

    public function css()
    {
        $articles = Article::latest('published_at')->published()->Css()->get();

        $category = 'css';

        return view('blog.category', compact('articles', 'category'));
    }

    public function design()
    {
        $articles = Article::latest('published_at')->published()->Design()->get();

        $category = 'design';

        return view('blog.category', compact('articles', 'category'));
    }

    public function seo()
    {
        $articles = Article::latest('published_at')->published()->Seo()->get();

        $category = 'seo';

        return view('blog.category', compact('articles', 'category'));
    }

    public function business()
    {
        $articles = Article::latest('published_at')->published()->Business()->get();

        $category = 'business';

        return view('blog.category', compact('articles', 'category'));
    }


    public function news()
    {
        $articles = Article::latest('published_at')->published()->News()->get();

        $category = 'news';

        return view('blog.category', compact('articles', 'category'));
    }



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $authors = Author::all();

		return view('blog.create', compact('authors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Request::all();
        $input['slug_en'] = str_slug(Request::get('title_en'), '-');
        $input['slug_da'] = str_slug(Request::get('title_da'), '-');
        $input['slug_author'] = str_slug(Request::get('author'), '-');


        Article::create($input);

        return redirect('blog');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function show($slug)
	{
        $article = Article::where('slug_'.LaravelLocalization::getCurrentLocale(), $slug)->published()->firstOrFail();

        $author = Author::where('author', $article->author)->firstOrFail();

        return view('blog.single', compact('article', 'author'));
	}




    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
        $article = Article::where('slug_'.LaravelLocalization::getCurrentLocale(), $slug)->firstOrFail();

        $author = Author::where('author', $article->author)->firstOrFail();

        $authors = Author::all();

        return view('blog.edit', compact('article', 'authors', 'author'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $article = Article::where('id', $id)->firstOrFail();

        $author = Author::where('author', $article->author)->firstOrFail();

        $article->update($request::all());

        return view('blog.single', compact('article', 'author'));
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
