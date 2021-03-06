<div class="row page-title">
	<div class="small-12 medium-6 column">
		<h2>Detail Shop Approved Product Lists</h2>
	</div>
	<div class="small-12 medium-6 column page-navigation">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop/sops', 'Detail SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop', 'Process', array('class' => 'button'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Detail Shop Approved Product List', array('id' => 'list'));?></li>
		<li><?=\Html::anchor('', 'Product Request Form', array('id' => 'request'));?></li>
	</ol>
</div>
<div id="content" class="row approved-products">

</div>
<script>
	$('#content').load(baseUrl + 'detailshop/products/product_list.html');
	$('#list').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'detailshop/products/product_list.html');
	});
	$('#request').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'detailshop/products/request.html');
	});
</script>