<?php
return array(
	'_root_' 	=> 'mypage',  // The default route
	'_404_' 	=> 'error404',    // The main 404 route
	'admin' 	=> 'admin/dashboard',
	'logout' => 'login/logout',
	'login/recover/:token' => 'login/recover/$1',
	'body-shop' => 'bodyshop/index',
	'body-shop/sops' => 'bodyshop/bodyshop_sop',
	'body-shop/products' => 'bodyshop/bodyshop_approved_products',
	'body-shop/msds' => 'bodyshop/msds',
	'body-shop/support' => 'bodyshop/techsupport',
);
