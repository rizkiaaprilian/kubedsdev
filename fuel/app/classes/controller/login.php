<?php
namespace Controller;

class Login extends Auth {

	public function action_index() {
		$content = \View::forge('login');
		$this->template->meta_title = 'Login';
		$this->template->content = $content;
	}

	public function post_submit() {
		$post = array_map('trim', \Input::post());
		if ((($post['email'] == '') && ($post['userid'] == '')) || ($post['password'] == '')) {
			return $this->response(array('status' => 'FAIL', 'msg' => 'Missing email, account or password'));
		}
		$authlite = \Authlite::instance('auth_user');
		// Try email login
		$user = $authlite->login($post['email'], $post['password'], isset($post['remember']));
		if (!$user) {
			// Try userid login
			$authlite->usercol = 'user_id';
			$user = $authlite->login($post['userid'], $post['password'], isset($post['remember']));
		}
		if (!$user) {
			return $this->response(array('status' => 'FAIL', 'msg' => 'Login failed'));
		}
		return $this->response(\Model\User::forge()->find_by_pk($user->id)->login());
	}

	public function action_forgot() {
		$content = \View::forge('forgot_password');
		$this->template->meta_title = 'Forgot Password';
		$this->template->content = $content;
	}

	public function post_forgot() {
		return $this->response(\Model\User::forge()->forgot_password(\Input::post()));
	}

	public function action_recover() {
		$user = \Model\User::find_one_by_token($this->param('token'));
		if ($user && $user->status_id == \Model\User::S_PASSWORD) {
			$content = \View::forge('new_password', $user->to_array());
			$this->template->meta_title = 'New Password';
			$this->template->content = $content;
		} else {
			\Response::redirect('/');
		}
	}

	public function post_reset() {
		return $this->response(\Model\User::forge()->reset_password(\Input::post()));
	}


	public function action_logout() {
		\Authlite::instance('auth_user')->logout();
		\Response::redirect('/login');
	}
}