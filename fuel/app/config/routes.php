<?php
return array(
	'_root_' 	=> 'mypage',  // The default route
	'_404_' 	=> 'error404',    // The main 404 route
	'admin' 	=> 'admin/dashboard',
	'logout' => 'login/logout',
	'login/recover/:token' => 'login/recover/$1',
	'mypage/body-shop' => 'mypage/bodyshop',
	'mypage/body-shop/sops' => 'mypage/bodyshop_sop',
	'mypage/body-shop/products' => 'mypage/bodyshop_approved_products',
	
);
