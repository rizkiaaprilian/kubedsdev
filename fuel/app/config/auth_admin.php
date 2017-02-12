<?php

return array
(
	/**
	 * User model
	 */
	'user_model' => 'admin',

	/**
	 * User table
	 */
	'user_table' => 'admin',

	/**
	 * Username column
	 */
	'username' => 'email',

	/**
	 * Password column
	 */
	'password' => 'passwrd',

	/**
	 * Session column
	 */
	'session' => 'session',

	/**
	 * Type of hash to use for passwords. Any algorithm supported by the hash function
	 * can be used here.
	 * @see http://php.net/hash
	 * @see http://php.net/hash_algos
	 */
	'hash_method' => 'sha256',

	/**
	 * Set the auto-login (remember me) cookie lifetime, in seconds. The default
	 * lifetime is two weeks.
	 */
	'lifetime' => 1209600,

	/**
	 * Set the session key that will be used to store the current user.
	 */
	'session_key' => 'authlite_admin',
);