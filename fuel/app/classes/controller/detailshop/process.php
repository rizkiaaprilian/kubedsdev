<?php
namespace Controller\Detailshop;

class Process extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_checklist(){
		return $this->response(\View::forge('detail_shop_process/checklist'));
	}
}