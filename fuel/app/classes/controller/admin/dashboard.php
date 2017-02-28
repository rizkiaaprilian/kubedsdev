<?php
namespace Controller\Admin;

class Dashboard extends Auth {
	public function action_index() {
		$page = \View::forge('admin/dashboard', null, false);
		$page->status = \Model\User::forge()->get_status_array();
		$page->users = (array)\Model\User::find_all();
		$this->template->styles = array('datatables.min.css','dataTables.foundation.min.css', 'responsive.dataTables.min.css', 'responsive.foundation.min.css');
		$this->template->scripts = array('datatables.min.js','dataTables.foundation.min.js', 'dataTables.responsive.min.js', 'responsive.foundation.min.js');
		$this->template->content = $page;
	}
}