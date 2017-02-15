<?php
namespace Controller\Paintshop;

class Products extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_abrasives() {
		return $this->response(\View::forge('paint_shop_products/abrasives'));
	}
	public function get_aerosols() {
		return $this->response(\View::forge('paint_shop_products/aerosols'));
	}
	public function get_masking() {
		return $this->response(\View::forge('paint_shop_products/masking'));
	}
	public function get_miscellaneous() {
		return $this->response(\View::forge('paint_shop_products/miscellaneous'));
	}
	public function get_request() {
		return $this->response(\View::forge('paint_shop_products/request'));
	}
}