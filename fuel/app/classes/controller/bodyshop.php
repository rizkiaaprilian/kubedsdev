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
		return $this->response(\View::forge('body_shop/oemrepair'));
	}

	public function get_disassembly() {
		return $this->response(\View::forge('repair/disassembly'));
	}
	public function get_mapping() {
		return $this->response(\View::forge('repair/mapping'));
	}
	public function get_planning() {
		return $this->response(\View::forge('repair/planning'));
	}
	public function get_cart() {
		return $this->response(\View::forge('repair/cart'));
	}
	public function get_staging() {
		return $this->response(\View::forge('repair/staging'));
	}
}