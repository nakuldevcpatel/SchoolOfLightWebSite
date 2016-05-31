<?php

class CareerApplicationsController extends \BaseController {

	/**
	 * Display a listing of application
	 *
	 * @return Response
	 */
	public function index()
	{
		$applications = CareerApplication::all();

		return View::make('admin.applications.index', compact('applications'));
	}

	/**
	 * Show the form for creating a new careerapplication
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.applications.create');
	}

	/**
	 * Store a newly created careerapplication in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), CareerApplication::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		CareerApplication::create($data);

		return Redirect::route('admin.applications.index');
	}

	/**
	 * Display the specified careerapplication.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$application = CareerApplication::findOrFail($id);

		return View::make('admin.applications.show', compact('application'));
	}

	/**
	 * Show the form for editing the specified careerapplication.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$careerapplication = CareerApplication::find($id);

		return View::make('admin.applications.edit', compact('careerapplication'));
	}

	/**
	 * Update the specified careerapplication in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$careerapplication = CareerApplication::findOrFail($id);

		$validator = Validator::make($data = Input::all(), CareerApplication::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$careerapplication->update($data);

		return Redirect::route('admin.applications.index');
	}

	/**
	 * Remove the specified careerapplication from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CareerApplication::destroy($id);

		return Redirect::route('admin.applications.index');
	}

}
