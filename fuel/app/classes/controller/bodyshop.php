<?php
namespace Controller;

class Bodyshop extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	
	public function get_oemrepair(){
		$view = \View::forge('body_shop/oemrepair');
		if (\Input::get('page') == 2) {
			$view = \View::forge('body_shop/oemrepair_page_2');
		}
		return $this->response($view);
	}
}