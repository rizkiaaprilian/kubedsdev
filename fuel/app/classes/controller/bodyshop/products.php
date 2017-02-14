<?php
namespace Controller\Bodyshop;

class Products extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_abrasives() {
		return $this->response(\View::forge('body_shop_products/abrasives'));
	}
	public function get_adhesives() {
		return $this->response(\View::forge('body_shop_products/adhesives'));
	}
	public function get_aerosols() {
		return $this->response(\View::forge('body_shop_products/aerosols'));
	}
	public function get_filler_putties() {
		return $this->response(\View::forge('body_shop_products/filler_putties'));
	}
	public function get_miscellaneous() {
		return $this->response(\View::forge('body_shop_products/miscellaneous'));
	}
	public function get_request() {
		return $this->response(\View::forge('body_shop_products/request'));
	}
	
}