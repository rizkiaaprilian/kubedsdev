<?php
namespace Controller;

class Detailshop extends Auth {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function action_index() {
		$this->template->content = \View::forge('detail_shop');
	}
	public function action_sop() {
		$this->template->content = \View::forge('detail_shop_sops');
	}
	public function action_approved_products() {
		$this->template->styles = array('datatables.min.css','dataTables.foundation.min.css', 'responsive.dataTables.min.css', 'responsive.foundation.min.css');
		$this->template->scripts = array('datatables.min.js','dataTables.foundation.min.js', 'dataTables.responsive.min.js', 'responsive.foundation.min.js');
		$this->template->content = \View::forge('detail_shop_approved_products');
	}
}