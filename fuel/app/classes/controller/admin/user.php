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
		$user->set($post);
		$user->validation()->add_callable($user);
		if ($user->validates()) {
			$result = $user->save();
			return $this->response(array('status' => 'OK'));
		}
		return $this->response(array('status' => 'FAIL', 'msg' => $user->validation()->show_errors()));
	}
}