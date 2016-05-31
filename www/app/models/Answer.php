<?php

class Answer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function question()
	{
		return $this->belongsTo('Question');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}