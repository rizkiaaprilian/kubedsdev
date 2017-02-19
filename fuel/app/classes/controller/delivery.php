<?php
namespace Controller;

class Delivery extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}

	public function get_steps() {
		return $this->response(\View::forge('delivery/steps'));
	}
	public function get_inspection() {
		return $this->response(\View::forge('delivery/inspection'));
	}
	public function get_additional() {
		return $this->response(\View::forge('delivery/additional'));
	}
}