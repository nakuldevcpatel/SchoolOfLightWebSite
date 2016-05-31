<?php

class ContentsController extends \BaseController {

	/**
	 * Display a listing of contents
	 *
	 * @return Response
	 */
	public function index()
	{
		$contents = Content::all();

		return View::make('admin.contents.index', compact('contents'));
	}

	/**
	 * Show the form for creating a new content
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.contents.create');
	}

	/**
	 * Store a newly created content in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		// dd($input);

		$validator = Validator::make($data, Content::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$data['header_img'] = imageStore($data['header_img']);
		$data['icon_img'] = imageStore($data['icon_img']);

		if($data['header_img'] || $data['icon_img'])
			Content::create($data);
		else
			return Redirect::back()->with('warning','Image size greater than 200kb');

		return Redirect::route('admin.contents.index');
	}

	/**
	 * Display the specified content.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$content = Content::findOrFail($id);

		return View::make('admin.contents.show', compact('content'));
	}

	/**
	 * Show the form for editing the specified content.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$content = Content::find($id);
		return View::make('admin.contents.edit', compact('content'));
	}

	/**
	 * Update the specified content in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$content = Content::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Content::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$data['header_img'] = imageEdit($data['header_img'], 'header_img', $content);
		$data['icon_img'] = imageEdit($data['icon_img'], 'icon_img', $content);

		if($data['header_img'] || $data['icon_img'])
			$content->update($data);

		return Redirect::route('admin.contents.index');
	}

	/**
	 * Remove the specified content from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		Content::destroy($id);

		return Redirect::route('admin.contents.index');
	}
}
