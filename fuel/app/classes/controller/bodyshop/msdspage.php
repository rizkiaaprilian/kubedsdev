<?php
namespace Controller\Bodyshop;

class Msdspage extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_index(){
		$view = \View::forge('body_shop/msds');
		return $this->response($view);
	}
}