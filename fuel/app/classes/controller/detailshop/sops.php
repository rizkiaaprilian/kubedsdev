<?php
namespace Controller\Detailshop;

class Sops extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_surface_defect_removal() {
		return $this->response(\View::forge('detail_shop_sops/surface_defect_removal'));
	}
}