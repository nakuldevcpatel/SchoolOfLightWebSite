<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function login()
	{
	  return View::make('admin.login');
	}

	public function do_login()
	{
	  if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
	    return Redirect::to('admin');
	  else
    	return Redirect::to('login')->with('notice', 'Invalid Credentials');
	}

	public function blog()
	{
		$articles = Blog::orderBy('created_at', 'desc')->get();
		return View::make('home.blog')->with(compact('articles'));
	}

	public function careers()
	{
		$postings = Posting::where('external', '=', '1')->get();
		return View::make('home.careers')->with(compact('postings'));
	}

	public function content($slug)
	{
		$content = Content::where('slug', '=', $slug)->first();

		return View::make('home.content')->with(compact('content'));
	}

	public function careerShow($id)
	{
		$data = Input::all();

		$posting = Posting::find($id);

		return View::make('home.career-application')->with(compact('posting'));
	}

	public function postApplication()
	{
		$data = Input::all();

		$data['cv'] = imageStore($data['cv']);

		if($data['cv'])
			CareerApplication::create($data);

		return View::make('home.application-confirmation');
	}

	public function submitQuesiton()
	{
		$data = Input::all();
		$data['pinned'] = '0';
		Question::create($data);

		return View::make('home.question-confirmation');
	}

	public function apply()
	{
		return View::make('home.apply');
	}

	public function postApply()
	{
		$data = Input::all();

		$data['cv'] = imageStore($data['cv']);

		if($data['cv'])
			CareerApplication::create($data);

		return View::make('home.application-confirmation');
	}

	public function community()
	{
		$questions = Question::where('pinned', '=', '1')->orderBy('created_at', 'desc')->get();
		return View::make('home.community')->with(compact('questions'));
	}

	public function article($id)
	{
		$article = Blog::find($id);
		$related_articles = Blog::where('category_id', '=', $article->category_id)->get();
		return View::make('home.article')->with(compact('article', 'related_articles'));
	}

	public function question($id)
	{
		$question = Question::find($id);
		return View::make('home.question')->with(compact('question'));
	}

	public function about()
	{
		$postings = Posting::where('external', '=', '0')->get();
		return View::make('home.about')->with(compact('postings'));
	}

	public function contact()
	{
		return View::make('home.contact');
	}

	public function submitContact()
	{
		$rules = array(
 				'name' => 'required',
        'message' => 'required|min:15',
        'email' => 'required|email'
			);

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
        return View::make('home.contact')->withErrors($validator);
    }
    else
    {
    	//send
    	return View::make('home.contact-confirmation');
    }
	}


}
