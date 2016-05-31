<?php

class PostingsController extends \BaseController {

	/**
	 * Display a listing of postings
	 *
	 * @return Response
	 */
	public function index()
	{
		$postings = Posting::all();

		return View::make('admin.postings.index', compact('postings'));
	}

	/**
	 * Show the form for creating a new posting
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.postings.create');
	}

	public function applications($id)
	{
		$applications = CareerApplication::where('posting_id' , '=', $id)->get();

		return View::make('admin.postings.applications')->with(compact('applications'));
	}

	/**
	 * Store a newly created posting in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Posting::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Posting::create($data);

		return Redirect::route('admin.postings.index');
	}

	/**
	 * Display the specified posting.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$posting = Posting::findOrFail($id);

		return View::make('admin.postings.show', compact('posting'));
	}

	/**
	 * Show the form for editing the specified posting.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$posting = Posting::find($id);

		return View::make('admin.postings.edit', compact('posting'));
	}

	/**
	 * Update the specified posting in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$posting = Posting::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Posting::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$posting->update($data);

		return Redirect::route('admin.postings.index');
	}

	/**
	 * Remove the specified posting from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Posting::destroy($id);

		return Redirect::route('admin.postings.index');
	}

}
