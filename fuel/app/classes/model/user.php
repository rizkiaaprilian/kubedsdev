<?php
namespace Model;

class User extends \Model_Crud {
	const S_NEW = 0; // New not validated
	const S_ACTIVE = 1;
	const S_PASSWORD = 2; // Needs new password
	const S_HOLD = 7; // Admin put on hold for any reason
	const S_ARCHIVE = 9; // Account closed, info archived

    const U_PREFIX = 'K'; // Prefix the user id with this then pad the id to 5

    const T_BUS = 0; // Business type only one for now

	protected static $_table_name = 'users';
	protected static $_mysql_timestamp = true;
	protected static $_created_at = 'created_at';
	protected static $_updated_at = 'updated_at';

	protected static $_mass_whitelist =	array('user_id', 'email', 'passwrd', 'bus_name', 'token', 'session', 'created_at',
		'updated_at', 'last_login', 'last_ip', 'status_id');
	protected static $_defaults =	array('id' => null, 'user_id' => null, 'email' => '', 'passwrd' => '',	'bus_name' => '',
		'token' => '', 'session' => '', 'created_at' => '', 'updated_at' => '', 'last_login' => '', 'last_ip' => '',
		'status_id' => 0);
	protected static $_rules = array('user_id' => 'required|unique_id','email' => 'required|valid_email', 'bus_name' => 'required');
	protected static $_labels = array('user_id' => 'User ID', 'email' => 'Email', 'bus_name' => 'Company');
	protected $_status = array(0 => 'New', 'Active', 'Password', self::S_HOLD => 'Hold', self::S_ARCHIVE => 'Archived');

	public function get_status_array() {
		return $this->_status;
	}

	public function generate_token($id) {
		return md5(uniqid($id, true));
	}

	public function login() {
		// Confirm active
		if ($this->status_id != self::S_ACTIVE) {
			return array('status' => 'FAIL', 'msg' => 'Account problem');
		}

		// Record the login
		$this->last_login = date_create()->format('Y-m-d H:i:s');
		$this->last_ip = \Input::ip();
		$this->save(false);
		return array('status' => 'OK');
	}

	public function profile($id) {
		$data = self::find_by_pk($id);
		return $data->to_array();
	}

	protected function post_save($result) {
		$this->passwrd = \Authlite::instance('auth_user')->hash($this->passwrd);
		$this->save(false);
		return $result;
	}

	public function all_users($params) {
		$data['data'] = array();
		$data['draw'] = (isset($params['draw'])) ? (int)$params['draw'] : '1';
		$aColumns = array('user_id','email','bus_name','last_login', 'status');
		$sql = "SELECT * FROM " . self::$_table_name;
		$data['recordsTotal'] = \DB::query($sql,  \DB::SELECT)->execute()->count();
		if (isset($params['search']['value']) && $params['search']['value'] != ''){
			$sql .= " WHERE (";
			$sql .= "user_id LIKE '%{$params['search']['value']}%'";
			$sql .= " OR email LIKE '%{$params['search']['value']}%'";
			$sql .= " OR company LIKE '%{$params['search']['value']}%'";
			$sql .= ")";
		}
		if (isset($params['order']) && ((int)$params['order'] > 0)) {
			$sql .= " ORDER BY {$aColumns[$params['order'][0]['column']]} {$params['order'][0]['dir']}";
		} else {
			$sql .= " ORDER BY id";
		}
		if (isset($params['start']) && $params['length'] != '-1') {
			$sql .= " LIMIT " . (int)$params['start'] . ", " . (int)$params['length'];
		}
		$result = \DB::query($sql, \DB::SELECT)->execute();
		$status = $this->get_status_array();
		foreach ($result as $row) {
			$row['status'] = $status[$row['status_id']];
			$data['data'][] = array_values(\Arr::filter_keys($row, $aColumns));
		}
		$data['recordsFiltered'] = \DB::query('SELECT FOUND_ROWS() AS cnt', \DB::SELECT)->execute()->get('cnt');
		return $data;
	}

	public function dologin($data){
		$response = array();
		$authlite = \Authlite::instance('auth_user');
		$authlite->logout();
		if ($authlite->login($data['email'], $data['passwrd'], isset($data['remember']))) {
			$status = $authlite->get_user()->status_id;
			switch ($status) {
				case self::S_NEW:
					$response['error']['message'] = 'Your account not yet activated. Please check your inbox for instruction';
					break;
				case self::S_HOLD:
					$response['error']['message'] = 'Your account was termprarily on hold.';
					break;
				case self::S_ARCHIVE:
					$response['error']['message'] = 'Your account archived';
					break;
				default: //success
					$response['success']['message'] = 'Login Successful';
					break;
			}
		} else {
			$response['error']['message'] = 'Invalid email or password';
		}
		return $response;
	}

	public function is_email_used($data){
		$user = self::find_one_by_email($data['email'], '=');
		if ($user === null) {
			$response['status'] = false;
			$response['success'] = array('message' => 'This email ready to use');
		} else {
			$response['status'] = true;
			$response['error'] = array('message' => 'This email already in use');
		}
		return $response;
	}

	public function forgot_password($post){
		$post = array_map('trim', $post);
		if (($post['email'] == '') && ($post['userid'] == '')) {
			return array('status' => 'FAILED', 'msg' => 'Enter your email or account ID');
		}
		if ($post['email'] == '') {
			$user = self::find_one_by_user_id($post['userid']);
		} else {
			$user = self::find_one_by_email($post['email']);
		}
		if ($user !== null) {
			$user->token = \Security::generate_token();
			$user->status_id = self::S_PASSWORD;
			$user->save(false);
			\Emails::forge()->reset_password($user->to_array());
			return array('status' => 'OK', 'msg' => 'An email with reset instructions has been sent');
		}
		return array('status' => 'FAILED', 'msg' => 'Email or account not found.');
	}

	public function reset_password($post){
		$post = array_map('trim', $post);
		// length 8, at least one lowercase letter, at least one uppercase letter, at least one number
		if (!preg_match_all('$\S*(?=\S{4,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $post['passwrd'])) {
			return array('status' => 'FAILED', 'msg' => 'Invalid password.');
		}
		if ($post['passwrd2'] !== $post['passwrd']) {
			return array('status' => 'FAILED', 'msg' => 'Passwords do not match.');
		}
		$user = self::find_by_pk($post['id']);
		if ($user !== null) {
			$user->token = '';
			$user->status_id = self::S_ACTIVE;
			$user->passwrd = \Authlite::instance('auth_user')->hash($post['passwrd']);
			$user->save(false);
			return array('status' => 'OK');
		}
		return array('status' => 'FAILED', 'msg' => 'Password reset error.');
	}

	public function _validation_unique_id($val) {
		if (self::find_one_by_user_id($val)) {
			$this->_validation->set_message('unique_id', 'User ID already exists');
			return false;
		}
		return true;
	}
	public function _validation_unique_email($val) {
		if (self::find_one_by_email($val)) {
			\Validation::active()->set_message('unique_id', 'Email already exists');
			return false;
		}
		return true;
	}
}
