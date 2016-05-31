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

Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('blog', 'HomeController@blog');

Route::get('blog/{id}', "HomeController@article");

Route::get('community', 'HomeController@community');

Route::get('question/{id}', "HomeController@question");

Route::get('careers', 'HomeController@careers');

Route::get('apply', 'HomeController@apply');

Route::get('about', 'HomeController@about');

Route::get('contact', ['uses' => 'HomeController@contact' , 'as' => 'contact']);
Route::post('submit-contact', ['uses' => 'HomeController@submitContact', 'as' => 'submit-contact']);

Route::post('post-apply', ['uses' => 'HomeController@postApply', 'as' => 'post-apply']);

Route::get('careers/{id}', 'HomeController@careerShow');

Route::get('products/{slug}', array('uses' => 'HomeController@content', 'as' => 'home.content'));


Route::get('login', array('uses' => 'HomeController@login', 'as' => 'login'));
Route::post('do_login', array('uses' => 'HomeController@do_login', 'as' => 'do_login'));

Route::post('post-application', array('uses' => 'HomeController@postApplication', 'as' => 'post-application'));

Route::post('submit-question', array('uses' => 'HomeController@submitQuesiton', 'as' => 'submitQuesiton'));

Route::group(array('prefix' => 'admin', 'before' => 'admin'), function(){
	Route::get('/', array('uses' => 'QuestionsController@index', 'as' => 'admin.questions.index'));

	Route::get('/questions/approve/{id}', array('uses' => 'QuestionsController@approve', 'as' => 'admin.questions.approve'));
	Route::get('/questions/unapprove/{id}', array('uses' => 'QuestionsController@unapprove', 'as' => 'admin.questions.unapprove'));

	Route::get('/questions', array('uses' => 'QuestionsController@index', 'as' => 'admin.questions.index'));
	Route::get('/questions/{id}', array('uses' => 'QuestionsController@show', 'as' => 'admin.questions.show'));
	Route::delete('/questions/{id}', array('uses' => 'QuestionsController@delete', 'as' => 'admin.questions.delete'));
	Route::delete('/answers/{id}', array('uses' => 'AnswersController@delete', 'as' => 'admin.answers.delete'));


	Route::get('/blogs', array('uses' => 'BlogsController@index', 'as' => 'admin.blogs.index'));
	Route::get('/blogs/create', array('uses' => 'BlogsController@create', 'as' => 'admin.blogs.create'));
	Route::post('/blogs', array('uses' => 'BlogsController@store', 'as' => 'admin.blogs.store'));
	Route::get('/blogs/edit/{id}', array('uses' => 'BlogsController@edit', 'as' => 'admin.blogs.edit'));
	Route::post('/blogs/update/{id}', array('uses' => 'BlogsController@update', 'as' => 'admin.blogs.update'));
	Route::delete('/blogs/delete/{id}', array('uses' => 'BlogsController@delete', 'as' => 'admin.blogs.delete'));

	Route::get('/contents', array('uses' => 'ContentsController@index', 'as' => 'admin.contents.index'));
	Route::get('/contents/create', array('uses' => 'ContentsController@create', 'as' => 'admin.contents.create'));
	Route::post('/contents', array('uses' => 'ContentsController@store', 'as' => 'admin.contents.store'));
	Route::get('/contents/edit/{id}', array('uses' => 'ContentsController@edit', 'as' => 'admin.contents.edit'));
	Route::post('/contents/update/{id}', array('uses' => 'ContentsController@update', 'as' => 'admin.contents.update'));
	Route::delete('/contents/delete/{id}', array('uses' => 'ContentsController@delete', 'as' => 'admin.contents.delete'));


	Route::get('/categories', array('uses' => 'CategoriesController@index', 'as' => 'admin.categories.index'));
	Route::post('/categories', array('uses' => 'CategoriesController@store', 'as' => 'admin.categories.store'));
	Route::get('/categories/edit/{id}', array('uses' => 'CategoriesController@edit', 'as' => 'admin.categories.edit'));
	Route::post('/categories/update/{id}', array('uses' => 'CategoriesController@update', 'as' => 'admin.categories.update'));
	Route::delete('/categories/delete/{id}', array('uses' => 'CategoriesController@delete', 'as' => 'admin.categories.delete'));


	Route::get('/postings', array('uses' => 'PostingsController@index', 'as' => 'admin.postings.index'));
	Route::get('/postings/create', array('uses' => 'PostingsController@create', 'as' => 'admin.postings.create'));
	Route::post('/postings', array('uses' => 'PostingsController@store', 'as' => 'admin.postings.store'));
	Route::get('/postings/edit/{id}', array('uses' => 'PostingsController@edit', 'as' => 'admin.postings.edit'));
	Route::post('/postings/update/{id}', array('uses' => 'PostingsController@update', 'as' => 'admin.postings.update'));
	Route::delete('/postings/delete/{id}', array('uses' => 'PostingsController@delete', 'as' => 'admin.postings.delete'));

	Route::get('/applications', array('uses' => 'CareerApplicationsController@index', 'as' => 'admin.applications.index'));

	Route::get('/applications/{id}', array('uses' => 'CareerApplicationsController@show', 'as' => 'admin.applications.show'));

	Route::get('/posting/{id}/applications/', array('uses' => 'PostingsController@applications', 'as' => 'admin.postings.applications'));
});

Route::post('category/order', array('uses' => 'CategoriesController@order', 'as' => 'categoryOrder.order'));