<?php

namespace Controller;

class Homepage extends \Controller {
	
	/**
	* Homepage index
	*
	* @access  public
	* @return  Response
	*/
	public function action_index() {
		$view = \View::forge('home_page');
		return \Response::forge($view);
	}
	
	/**
	* The 404 action for the application.
	*
	* @access  public
	* @return  Response
	*/
	public function action_404() {
		return \Response::forge(\View::forge('404_error'));
	}
}
