<?php
namespace Controller\Paintshop;

class Sops extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	public function get_masking() {
		return $this->response(\View::forge('paint_shop_sops/01_masking'));
	}
	public function get_sanding_system_prep() {
		return $this->response(\View::forge('paint_shop_sops/02_sanding_system_prep'));
	}
	public function get_sanding_system_repaired_plastic() {
		return $this->response(\View::forge('paint_shop_sops/03_sanding_system_repaired_plastic'));
	}
	public function get_sanding_system_blends() {
		return $this->response(\View::forge('paint_shop_sops/04_sanding_system_blends'));
	}
	public function get_filter_maintenance() {
		return $this->response(\View::forge('paint_shop_sops/05_filter_maintenance'));
	}
	public function get_spray_gun_cleaning() {
		return $this->response(\View::forge('paint_shop_sops/06_spray_gun_cleaning'));
	}
	public function get_spray_gun_assembly() {
		return $this->response(\View::forge('paint_shop_sops/07_spray_gun_assembly'));
	}
	public function get_spray_gun_troubleshooting() {
		return $this->response(\View::forge('paint_shop_sops/08_spray_gun_troubleshooting'));
	}
	public function get_respirator_fit_testing() {
		return $this->response(\View::forge('paint_shop_sops/09_respirator_fit_testing'));
	}
}