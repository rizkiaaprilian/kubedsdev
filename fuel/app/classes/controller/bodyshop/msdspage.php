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
		$view = \View::forge('body_shop/msds_1');
		if (\Input::get('page') == 2) {
			$view = \View::forge('body_shop/msds_2');
		} elseif(\Input::get('page') == 3) {
			$view = \View::forge('body_shop/msds_3');
		}
		return $this->response($view);
	}
}