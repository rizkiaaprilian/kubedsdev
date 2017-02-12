<?php
namespace Controller\Admin;

class Auth extends \Controller_Hybrid {
	public $template = 'admin/admin_base';
	public $authlite;
	public $auto_render;

	public function before() {
		parent::before();
		// Authlite instance
		$this->authlite = \Authlite::instance('auth_admin');
		$this->auto_render = !\Input::is_ajax();

		// Login check
		if ((\Request::active()->controller != 'Controller\Admin\Login') && !$this->authlite->logged_in()) {
			\Response::redirect('/admin/login');
		}

		if ($this->auto_render) {
			// Initialize empty values
			$this->template->meta_title = '';
			$this->template->meta_desc = '';
			$this->template->title = '';
			$this->template->content = '';
			$this->template->logged_in = $this->authlite->logged_in();

			$this->template->styles = array();
			$this->template->scripts = array();
		}
	}

	public function after($response) {
		return parent::after($response);
	}
}