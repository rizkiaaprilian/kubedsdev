<div class="row page-title">
	<div class="small-12 medium-6 column">
		<h2>Paint Shop Approved Product Lists</h2>
	</div>
	<div class="small-12 medium-6 column page-navigation">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/paint-shop/sops', 'Paint SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/paint-shop', 'Process', array('class' => 'button'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Abrasives', array('id' => 'abrasives'));?></li>
		<li><?=\Html::anchor('', 'Aerosol', array('id' => 'aerosol'));?></li>
		<li><?=\Html::anchor('', 'Masking', array('id' => 'masking'));?></li>
		<li><?=\Html::anchor('', 'Miscellanous', array('id' => 'miscellanous'));?></li>
		<li><?=\Html::anchor('', 'Product Request Form', array('id' => 'request'));?></li>
	</ol>
</div>
<div class="row column approved-products" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'paintshop/products/abrasives.html');
	$('#abrasives').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/products/abrasives.html');
	});
	$('#aerosol').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/products/aerosols.html');
	});
	$('#masking').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/products/masking.html');
	});
	$('#miscellanous').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/products/miscellaneous.html');
	});
	$('#request').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/products/request.html');
	});
</script>