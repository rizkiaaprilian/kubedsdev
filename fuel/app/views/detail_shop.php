<div class="row page-title">
	<div class="small-12 medium-6 column">
		<h2>Detailing Checklist</h2>
	</div>
	<div class="small-12 medium-6 column page-navigation">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop/sops', 'Detail SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop/products', 'Approved Products', array('class' => 'button warning'));?>
	</div>
</div>
<div class="row" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'detailshop/process/checklist.html');
	$('#surface').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'detailshop/process/checklist.html');
	});
</script>