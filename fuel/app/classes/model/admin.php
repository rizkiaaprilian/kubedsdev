<?php
namespace Model;

class Admin extends \Model_Crud {
	const S_NEW = 0;
	const S_ACTIVE = 1;
	const S_INACTIVE = 2;

	protected static $_table_name = 'admin';
	protected static $_mysql_timestamp = true;
	protected static $_created_at = 'created_at';

	protected static $_mass_whitelist =	array('id', 'email', 'passwrd', 'fist_name', 'last_name', 'session',
		'created_at', 'session','status_id');
	protected static $_defaults =	array('id' => null, 'user_id' => null, 'email' => '', 'passwrd' => '',	'first_name' => '',
		'last_name' => '', 'created_at' => '', 'session' => '', 'status_id' => 0);
	protected static $_rules = array('email' => 'required|valid_email');
	protected static $_labels = array('email' => 'Email', 'passwrd' => 'Password');
	protected $_status = array(0 => 'New', 'Active', 'Password', self::S_HOLD => 'Hold', self::S_ARCHIVE => 'Archived');

	public function get_status($id = null) {
		if ($id === null) {
			return $this->_status;
		}
		if (isset($this->_status[$id])) {
			return $this->_status[$id];
		}
		return '';
	}

	public function get_datatable_list() {
		$data = array();
		$users = $this->load(\DB::select_array(), NULL);

		foreach ($users as $row) {
			$row['level'] = $this->_level[$row['id_level']];
			$row['status'] = $this->_status[$row['id_status']];
			$row['action'] = \html::anchor('sysusers/edit/' . $row['id'], 'Edit');
			$data[] = $row;
		}
		return $data;
	}

	public function save($validation = null) {
		if (empty($this->_data['id'])) {
			$this->date_created = date_create()->format('Y-m-d H:i:s');
		}
		$this->email = strtolower($this->email);

		// Don't save the password
		if (($this->passwrd == '') || (strlen($this->passwrd) == 32)) {
			unset($this->_data['passwrd']);
		} else {
			$this->passwrd = \Authlite::instance('auth_admin')->hash($this->passwrd);

		}
		parent::save();
	}
}