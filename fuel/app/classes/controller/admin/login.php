<?php
namespace Controller\Admin;

class Login extends Auth {
	public $template = 'admin/admin_base';
	public $authlite;

	public function before() {
		parent::before();
		$this->authlite->logout();
	}

	public function action_index() {
		if (\Input::post('login')) {
			$data = \Input::post();
			$pw = $this->authlite->hash(\Input::post('passwrd'));
			if ($this->authlite->login(\Input::post('email'), \Input::post('passwrd'))) {
				$user = $this->authlite->get_user();
				if ($user->status_id == \Model\Admin::S_ACTIVE) {
					\Response::redirect('/admin');
				}
			}
			$data['message'] = '<div class="callout alert small">Login Error. Try again</div>';
		} else {
			$data = array('email' => '', 'passwrd' => '', 'message' => '');
		}
		$this->template->content = \View::forge('admin/login', $data, false);
	}

	public function action_logout() {
		\Response::redirect('/admin/login');
	}
}