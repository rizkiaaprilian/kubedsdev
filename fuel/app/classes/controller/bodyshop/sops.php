<?php
namespace Controller\Bodyshop;

class Sops extends \Controller_Rest {
	public function before() {
		parent::before();
		\Asset::add_path('assets/kube', 'img');
		\Asset::add_path('assets/kube/0001', 'img');
		// Not from the website exit out
	}
	
	public function get_bumper_repair_cosmetic(){
		return $this->response(\View::forge('body_shop_sops/01_bumper_repair_cosmetic'));
	}
	public function get_bumper_repair_structural(){
		return $this->response(\View::forge('body_shop_sops/02_bumper_repair_structural'));
	}
	public function get_filler_application(){
		return $this->response(\View::forge('body_shop_sops/03_body_filler_application'));
	}
	public function get_door_skin_installation(){
		return $this->response(\View::forge('body_shop_sops/04_door_skin_installation'));
	}
	public function get_bond_procedure(){
		return $this->response(\View::forge('body_shop_sops/05_bond_procedure'));
	}
	public function get_door_skin_seam_sealing(){
		return $this->response(\View::forge('body_shop_sops/06_door_skin_seam_sealing'));
	}
	public function get_truck_bed_seam_sealing(){
		return $this->response(\View::forge('body_shop_sops/07_truck_bed_seam_sealing'));
	}
	public function get_roof_ditch(){
		return $this->response(\View::forge('body_shop_sops/08_roof_ditch'));
	}
	public function get_sprayable_seam_sealers(){
		return $this->response(\View::forge('body_shop_sops/09_sprayable_seam_sealers'));
	}
	public function get_wheel_house(){
		return $this->response(\View::forge('body_shop_sops/10_wheel_house'));
	}
	public function get_sanding_system(){
		return $this->response(\View::forge('body_shop_sops/11_sanding_system'));
	}

}