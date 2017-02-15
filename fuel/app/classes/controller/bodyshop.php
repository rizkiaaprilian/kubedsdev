<?php
namespace Controller;

class Bodyshop extends Auth {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function action_index() {
		$this->template->content = \View::forge('body_shop');
	}
	public function action_sop() {
		$this->template->content = \View::forge('body_shop_sops');
	}
	public function action_approved_products() {
		$this->template->styles = array('datatables.min.css','dataTables.foundation.min.css');
		$this->template->scripts = array('datatables.min.js','dataTables.foundation.min.js');
		$this->template->content = \View::forge('body_shop_approved_products');
	}
	public function get_oemrepair(){
		$view = \View::forge('body_shop/oemrepair');
		if (\Input::get('page') == 2) {
			$view = \View::forge('body_shop/oemrepair_page_2');
		}
		return $this->response($view);
	}
	public function action_msds() {
		$this->template->content = \View::forge('msds');
	}
}