<div class="row">
	<div class="small-6 column">
		<h2>Detailing Checklist</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop/sops', 'Detail SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop/products', 'Approved Products', array('class' => 'button warning'));?>
	</div>
</div>
<div class="row column">
	
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'detailshop/process/checklist.html');
	$('#surface').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'detailshop/process/checklist.html');
	});
</script>