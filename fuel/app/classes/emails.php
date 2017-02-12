<?php
/**
* Common email functions
*
*/
class Emails {
	protected $_email;

	public function __construct($reply = null) {
		\Package::load('email');
		$this->_email = \Email::forge();
		if ($reply !== null) {
			$this->_email->from($reply);
		}
		\Asset::add_path('assets/images/email/', 'img');
	}

	public static function forge() {
		return new self;
	}

	public function reset_password($data) {
		$vars['url'] = \Uri::create('login/recover/:token', array('token' => $data['token']));
		$footer['unsubscribe_link'] = \Html::anchor('stop_mail/' . $data['email'], 'here');
		$vars['email_footer'] = \View::forge('email/footer', $footer);
		$this->_email->to($data['email']);
		$this->_email->subject('Kube DS Password Reset');
		$this->_email->html_body(\View::forge('email/forgot', $vars));
		try	{
			$this->_email->send();
			return true;
		} catch(\EmailValidationFailedException $e)	{
			// The validation failed
		} catch(\EmailSendingFailedException $e) {
			// The driver could not send the email
		}
		return false;
	}

	public function activate($data, $type) {
		$this->_email->to($data['email']);
		if (($bcc = \Sysconfig::get('email_bcc')) != '') {
			$this->_email->bcc($bcc);
		}
		$this->_email->subject('Verify Email Address');
		$this->_email->html_body(\View::forge('email/activate_' . $type, $data));
		try	{
			$this->send();
			return true;
		} catch(\EmailValidationFailedException $e)	{
			// The validation failed
		} catch(\EmailSendingFailedException $e) {
			// The driver could not send the email
		}
		return false;
	}

	public function welcome($data, $type) {
		$footer['unsubscribe_link'] = \Html::anchor('stop_mail/' . $data['email'] . '/' . $type, 'here');
		$vars['email_footer'] = \View::forge('email/footer', $footer);
		$this->_email->to($data['email']);
		if (($bcc = \Sysconfig::get('email_bcc')) != '') {
			$this->_email->bcc($bcc);
		}
		$this->_email->subject('Welcome to xTradeHomes!');
		$this->_email->html_body(\View::forge('email/welcome_' . $type, $data));
		try	{
			$this->send();
			return true;
		} catch(\EmailValidationFailedException $e)	{
			// The validation failed
		} catch(\EmailSendingFailedException $e) {
			// The driver could not send the email
		}
		return false;
	}

	public static function email_template_header(){
		$view = \View::forge('email/header');
		return $view;
	}

	public static function email_template_footer($unsubscribe_link=NULL){
		$data['unsubscribe_link'] = $unsubscribe_link;
		$view = \View::forge('email/footer', $data);
		return $view;
	}
}
