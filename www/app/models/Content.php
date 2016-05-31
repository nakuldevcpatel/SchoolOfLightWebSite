<?php

class Content extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'title' => 'required',
		 'slug' => 'required',
		 'content' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ["name", "slug", "header1","header2", "header_img", "icon_img", "title", "content"];

}