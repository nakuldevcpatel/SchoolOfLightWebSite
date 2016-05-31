<?php

class Question extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $guarded = [];
	public function answers()
	{
		return $this->hasMany('Answer');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}