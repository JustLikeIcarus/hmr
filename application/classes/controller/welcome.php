<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_App {
	public $auth_required = 'login'; // FALSE | string | array
	public $template = 'template/useradmin';
	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	public function action_meal()
	{
		$this->template->title = __('Meal Info');
		$this->template->content = View::factory('meal_info');
	}
} // End Welcome
