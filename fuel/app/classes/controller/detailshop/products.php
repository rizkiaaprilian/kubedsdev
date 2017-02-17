<?php
namespace Controller\Detailshop;

class Products extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_product_list() {
		return $this->response(\View::forge('detail_shop_products/list'));
	}
	public function get_request() {
		return $this->response(\View::forge('detail_shop_products/request'));
	}
}