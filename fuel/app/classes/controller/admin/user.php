<?php
namespace Controller\Admin;

class User extends \Controller_Rest {
	public function action_index() {
	}

	public function get_update() {
		$data['data'] = \Model\User::find_by_pk(\Input::get('id'));
		$data['cboStatus'] = \Model\User::forge()->get_status_array();
		return $this->response(\View::forge('admin/dialog/user', $data));
	}

	public function post_save() {
		$post = array_map('trim', \Input::post('data'));
		if (($user = \Model\User::find_by_pk($post['id'])) === null) {
			$user = \Model\User::forge();
		}
		$passwrd = trim(\Input::post('passwrd'));
		// If password not empty then hash before save
		if ($passwrd != '') {
			$post['passwrd'] = \Authlite::instance('auth_user')->hash($passwrd);
		}
		if ($user->is_new()) {
			$user->set($post);
			$user->validation()->add_callable($user);
			if ($user->validates()) {
				$result = $user->save();
				return $this->response(array('status' => 'OK'));
			}
			return $this->response(array('status' => 'FAIL', 'msg' => $user->validation()->show_errors()));
		} else {
			if ($passwrd != '') {
				$user->passwrd = $post['passwrd'];
			}
			$user->status_id = $post['status_id'];
			$result = $user->save();
			return $this->response(array('status' => 'OK'));
		}
	}

	public function post_reset() {
		return $this->response(\Model\User::forge()->forgot_password(\Input::post('data')));
	}
}