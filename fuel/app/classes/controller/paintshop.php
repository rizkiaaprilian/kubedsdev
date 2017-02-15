<?php
namespace Controller;

class Paintshop extends Auth {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function action_index() {
		$this->template->content = \View::forge('paint_shop');
	}
}