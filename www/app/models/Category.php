<?php

class Category extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];
	protected $guarded = [];

	public function blogs()
	{
		return $this->hasMany('Blog');
	}

}