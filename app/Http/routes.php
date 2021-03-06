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
    Route::get(LaravelLocalization::transRoute('routes.authors'), 'AuthorsController@index');
    Route::get(LaravelLocalization::transRoute('routes.authors-home'), 'AuthorsController@index');
    Route::get(LaravelLocalization::transRoute('routes.coming'), 'PagesController@coming');
    Route::get('browser', 'PagesController@browser');
    Route::post('contact', 'EmailController@contact');
    Route::get('success', 'PagesController@success');
    Route::get('cold', 'PagesController@coldMail');
    Route::post('cold', 'EmailController@cold');
    Route::post('client', 'EmailController@client');
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
    Route::resource('clients', 'ClientsController');
    Route::get(LaravelLocalization::transRoute('routes.client'), 'PagesController@client');
    Route::resource('projects', 'ProjectsController');
    Route::get('projects/{id}/create', 'ProjectsController@create');
    Route::resource('subscriptions', 'SubscriptionsController');
    Route::get('subscriptions/{id}/create', 'SubscriptionsController@create');
    Route::resource('invoices', 'InvoicesController');
    Route::get('invoices/{id}/create', 'InvoicesController@create');
    Route::get('/login', array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin'));
    Route::post('/login', array('as' => 'login', 'uses' => 'Auth\AuthController@postLogin'));
    Route::get('/logout', array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'));
    Route::get('auth/register', ['middleware' => 'auth']);
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
Route::resource('email', 'EmailController');




