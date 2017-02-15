<div class="row">
	<div class="small-6 column">
		<h2>Body Shop Approved Product Lists</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop/sops', 'Body SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop', 'Process', array('class' => 'button'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Abrasives', array('id' => 'abrasives'));?></li>
		<li><?=\Html::anchor('', 'Adhesives', array('id' => 'adhesives'));?></li>
		<li><?=\Html::anchor('', 'Aerosol', array('id' => 'aerosol'));?></li>
		<li><?=\Html::anchor('', 'Fillers and Putties', array('id' => 'filler_putties'));?></li>
		<li><?=\Html::anchor('', 'Miscellanous', array('id' => 'miscellanous'));?></li>
		<li><?=\Html::anchor('', 'Product Request Form', array('id' => 'request'));?></li>
	</ol>
</div>
<div class="row column approved-products" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'bodyshop/products/abrasives.html');
	$('#abrasives').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/products/abrasives.html');
	});
	$('#adhesives').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/products/adhesives.html');
	});
	$('#aerosol').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/products/aerosols.html');
	});
	$('#filler_putties').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/products/filler_putties.html');
	});
	$('#miscellanous').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/products/miscellaneous.html');
	});
	$('#request').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/products/request.html');
	});
</script>