<?php
namespace Controller\Bodyshop;

class Process extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_oemrepair(){
		$view = \View::forge('body_shop_process/oemrepair');
		if (\Input::get('page') == 2) {
			$view = \View::forge('body_shop_process/oemrepair_page_2');
		}
		return $this->response($view);
	}
}