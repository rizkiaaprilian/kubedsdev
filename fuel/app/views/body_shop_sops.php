<div class="row">
	<div class="small-6 column">
		<h2>Body Shop SOPs</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop', 'Process', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop/products', 'Approved Products', array('class' => 'button warning'));?>
		<?=\Html::anchor('/body-shop/msds', 'MSDS', array('class' => 'button alert'));?>
		<?=\Html::anchor('/body-shop/support', 'Technical Support', array('class' => 'button alert'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Bumper Repair - Cosmetic', array('id' => 'cosmetic'));?></li>
		<li><?=\Html::anchor('', 'Bumper Repair - Structural', array('id' => 'structural'));?></li>
		<li><?=\Html::anchor('', 'Body Filler Application', array('id' => 'bodyfiller'));?></li>
		<li><?=\Html::anchor('', 'Door Skin Installation', array('id' => 'door_skin_installation'));?></li>
		<li><?=\Html::anchor('', 'STRSW Weld / Bond Procedure', array('id' => 'strsw'));?></li>
		<li><?=\Html::anchor('', 'Door Skin Seam Sealing', array('id' => 'door_skin_seam_sealing'));?></li>
		<li><?=\Html::anchor('', 'Truck Bed Seam Sealing', array('id' => 'truck_bed_seam_sealing'));?></li>
		<li><?=\Html::anchor('', 'Roof Ditch / Self-Leveling Seam Sealer', array('id' => 'roof_ditch'));?></li>
		<li><?=\Html::anchor('', 'Sprayable Seam Sealers', array('id' => 'sprayable_seam_sealers'));?></li>
		<li><?=\Html::anchor('', 'Wheel House / Underbody Protection', array('id' => 'wheel_house'));?></li>
		<li><?=\Html::anchor('', 'Sanding System (Body)', array('id' => 'sanding_system'));?></li>
	</ol>
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'bodyshop/sops/bumper_repair_cosmetic.html');
	$('#cosmetic').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/bumper_repair_cosmetic.html');
	});
	$('#structural').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/bumper_repair_structural.html');
	});
	$('#bodyfiller').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/filler_application.html');
	});
	$('#door_skin_installation').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/door_skin_installation.html');
	});
	$('#strsw').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/bond_procedure.html');
	});
	$('#door_skin_seam_sealing').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/door_skin_seam_sealing.html');
	});
	$('#truck_bed_seam_sealing').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/truck_bed_seam_sealing.html');
	});
	$('#roof_ditch').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/roof_ditch.html');
	});
	$('#sprayable_seam_sealers').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/sprayable_seam_sealers.html');
	});
	$('#wheel_house').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/wheel_house.html');
	});
	$('#sanding_system').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'bodyshop/sops/sanding_system.html');
	});
</script>