<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localize', 'localizationRedirect' ] // LaravelLocalization routes and filter

    ], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', 'PagesController@home');
    Route::get(LaravelLocalization::transRoute('routes.home'), 'PagesController@home');
    Route::get(LaravelLocalization::transRoute('routes.work'), 'PagesController@work');
    Route::get(LaravelLocalization::transRoute('routes.services'), 'PagesController@services');
    Route::get(LaravelLocalization::transRoute('routes.about'), 'PagesController@about');
    Route::get(LaravelLocalization::transroute('routes.authors'), 'AuthorsController@index');
    Route::get(LaravelLocalization::transroute('routes.authors-home'), 'AuthorsController@index');
    Route::get(LaravelLocalization::transroute('routes.coming'), 'PagesController@coming');
    Route::get('browser', 'PagesController@browser');
    Route::post('contact', 'EmailController@contact');
    Route::get('success', 'PagesController@success');
    Route::get('blog', 'ArticlesController@index');
    Route::get('blog/admin', 'ArticlesController@admin');
    Route::get('blog/create', 'ArticlesController@create');
    Route::get('blog/authors/create', 'AuthorsController@create');
    Route::get('blog/authors/{slug}/edit', 'AuthorsController@edit');
    Route::get('blog/upload', 'UploadsController@create');
    Route::get('blog/php', 'ArticlesController@php');
    Route::get('blog/html', 'ArticlesController@html');
    Route::get('blog/css', 'ArticlesController@css');
    Route::get('blog/javascript', 'ArticlesController@javascript');
    Route::get('blog/design', 'ArticlesController@design');
    Route::get('blog/seo', 'ArticlesController@seo');
    Route::get('blog/business', 'ArticlesController@business');
    Route::get('blog/news', 'ArticlesController@news');
    Route::get('blog/{slug}', 'ArticlesController@show');
    Route::get('blog/{slug}/edit', 'ArticlesController@edit');
    Route::resource('authors', 'AuthorsController');
    Route::resource('articles', 'ArticlesController');
    Route::resource('uploads', 'UploadsController');
    Route::get('auth/register', ['middleware' => 'auth']);
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
Route::resource('email', 'EmailController');





