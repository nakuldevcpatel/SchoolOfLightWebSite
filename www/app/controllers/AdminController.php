<?php

class AdminController extends BaseController {

	public function example(){
		return View::make('admin.example');
	}
	public function store(){
		$items =  ['awesome' => '1',  'awesome_more' => '1'];
		dd(sortModel($items,'User'));
	}
}
