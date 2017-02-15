<?php
return array(
	'_root_' 	=> 'mypage',  // The default route
	'_404_' 	=> 'error404',    // The main 404 route
	'admin' 	=> 'admin/dashboard',
	'logout' => 'login/logout',
	'login/recover/:token' => 'login/recover/$1',
	'body-shop' => 'bodyshop/index',
	'body-shop/sops' => 'bodyshop/sop',
	'body-shop/products' => 'bodyshop/approved_products',
	'body-shop/msds' => 'bodyshop/msds',
	'body-shop/support' => 'mypage/techsupport',
	'paint-shop' => 'paintshop/index',
	'paint-shop/sops' => 'paintshop/sop',
	'paint-shop/products' => 'paintshop/approved_products',
	'paint-shop/test' => 'paintshop/fit_test',
	'paint-shop/support' => 'mypage/techsupport'
);
