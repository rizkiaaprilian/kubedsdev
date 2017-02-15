<?php
namespace Controller;

class Mypage extends Auth {
	public $template = 'member_base';

	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		$user = $this->authlite->get_user();
		$this->template->bus_name = $user->bus_name;
	}

	public function action_index() {
		$this->template->content = \View::forge('home');
	}
	public function action_checkin() {
		$this->template->content = \View::forge('checkin');
	}
	public function action_office() {
		$this->template->content = \View::forge('office');
	}
	public function action_repair() {
		$this->template->content = \View::forge('repair');
	}
	public function action_techsupport() {
		$this->template->content = \View::forge('technical_support');
	}
}