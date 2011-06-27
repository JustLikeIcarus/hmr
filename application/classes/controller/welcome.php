<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_App {
	public $auth_required = 'login'; // FALSE | string | array
	public $template = 'template/mobile';
	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	public function action_meal()
	{
		$date = date('l jS \of F Y');
		$title = $date;
		$this->template->title = $title;
		$this->template->content = View::factory('mobile/meal_info');
		$this->template->content->header = $title;
	}
} // End Welcome
