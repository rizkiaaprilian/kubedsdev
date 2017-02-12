<?php
namespace Controller;

class Checkin extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}

	public function get_process() {
		return $this->response(\View::forge('checkin/sop'));
	}
	public function get_information() {
		return $this->response(\View::forge('checkin/information'));
	}
	public function get_checklist() {
		return $this->response(\View::forge('checkin/checklist'));
	}
	public function get_forms() {
		return $this->response(\View::forge('checkin/forms'));
	}
}