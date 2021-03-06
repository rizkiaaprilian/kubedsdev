<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?=$meta_title;?></title>
		<link href="/assets/css/app.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="/assets/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css" media="screen" />
		<?= \Asset::css($styles, array(), null, false); ?>
		<script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="/assets/js/foundation.min.js" type="text/javascript"></script>
		<?= \Asset::js($scripts, array(), null, false); ?>
		<script>var baseUrl = '<?=Uri::base(false);?>';</script>
	</head>
	<body>
		<header id="header" class="row">
			<div class="small-12 medium-6 column">
				<?=\Html::anchor('/', \Asset::img('kube-logo.png', array('alt' => 'Kube DS')));?>
			</div>
			<div class="small-12 medium-6 column text-center">
				<h3>Welcome <?=$bus_name;?></h3>
			</div>
		</header>

		<div id="main_content">
			<?=$content;?>
		</div>
		<footer id="footer" class="row">
			<div class="small-12 medium-6 column">
				&copy;Color Compass Corporation
			</div>
			<div class="small-12 medium-6 column text-right">
				<?=\Html::anchor('/login/logout', 'Logout');?>
			</div>
		</footer>
	</body>
	<script>$(document).foundation();</script>
</html>