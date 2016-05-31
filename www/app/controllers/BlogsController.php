<?php

class BlogsController extends \BaseController {

	/**
	 * Display a listing of blogs
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::all();

		return View::make('admin.blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new blog
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::lists('name','id');
		return View::make('admin.blogs.create',compact('categories'));
	}

	/**
	 * Store a newly created blog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		// dd($input);

		$validator = Validator::make($data, Blog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$data['featured_img'] = imageStore($data['featured_img']);

		if($data['featured_img'])
			Blog::create($data);
		else
			return Redirect::back()->with('warning','Image size greater than 200kb');

		return Redirect::route('admin.blogs.index');
	}

	/**
	 * Display the specified blog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);

		return View::make('admin.blogs.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified blog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);
		$categories = Category::lists('name','id');

		return View::make('admin.blogs.edit', compact('blog','categories'));
	}

	/**
	 * Update the specified blog in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$blog = Blog::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Blog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$data['featured_img'] = imageEdit($data['featured_img'], 'featured_img', $blog);

		if($data['featured_img'])
			$blog->update($data);

		return Redirect::route('admin.blogs.index');
	}

	/**
	 * Remove the specified blog from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		Blog::destroy($id);

		return Redirect::route('admin.blogs.index');
	}

}
