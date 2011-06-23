<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
	public $auth_required = 'login'; // FALSE | string | array
	public $template = 'template/useradmin';
	public function action_index()
	{
		$this->response->body('hello, world!');
	}

} // End Welcome
