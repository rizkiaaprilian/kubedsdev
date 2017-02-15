<div class="row">
	<div class="small-6 column">
		<h2>Paint Shop SOPs</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/paint-shop', 'Process', array('class' => 'button'));?>
		<?=\Html::anchor('/paint-shop/products', 'Approved Products', array('class' => 'button warning'));?>
		<?=\Html::anchor('/paint-shop/test', 'Fit Test', array('class' => 'button alert'));?>
		<?=\Html::anchor('/paint-shop/support', 'Technical Support', array('class' => 'button alert'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Masking', array('id' => 'masking'));?></li>
		<li><?=\Html::anchor('', 'Sanding System (Prep)', array('id' => 'prep'));?></li>
		<li><?=\Html::anchor('', 'Sanding System (Repaired Plastic)', array('id' => 'repair'));?></li>
		<li><?=\Html::anchor('', 'Sanding System (Blends)', array('id' => 'blends'));?></li>
		<li><?=\Html::anchor('', 'SATA 3 Stage Filter Maintenance', array('id' => 'sata_maintenance'));?></li>
		<li><?=\Html::anchor('', 'Spray Gun Cleaning', array('id' => 'cleaning'));?></li>
		<li><?=\Html::anchor('', 'Spray Gun - Assembly & Maintenance', array('id' => 'assembly'));?></li>
		<li><?=\Html::anchor('', 'Spray Gun - Trouble Shooting', array('id' => 'troubleshooting'));?></li>
		<li><?=\Html::anchor('', 'Respirator Fit Testing', array('id' => 'respirator'));?></li>
	</ol>
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'paintshop/sops/masking.html');
	$('#masking').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/masking.html');
	});
	$('#prep').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/sanding_system_prep.html');
	});
	$('#repair').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/sanding_system_repaired_plastic.html');
	});
	$('#blends').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/sanding_system_blends.html');
	});
	$('#sata_maintenance').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/filter_maintenance.html');
	});
	$('#cleaning').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/spray_gun_cleaning.html');
	});
	$('#assembly').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/spray_gun_assembly.html');
	});
	$('#troubleshooting').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/spray_gun_troubleshooting.html');
	});
	$('#respirator').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'paintshop/sops/respirator_fit_testing.html');
	});
</script>