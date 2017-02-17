<div class="row">
	<div class="small-6 column">
		<h2>Detail Shop SOPs</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop', 'Process', array('class' => 'button'));?>
		<?=\Html::anchor('/detail-shop/products', 'Approved Products', array('class' => 'button warning'));?>
		<?=\Html::anchor('/detail-shop/support', 'Technical Support', array('class' => 'button alert'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Surface Defect Removal', array('id' => 'surface'));?></li>
	</ol>
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'detailshop/sops/surface_defect_removal.html');
	$('#surface').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'detailshop/sops/surface_defect_removal.html');
	});
</script>