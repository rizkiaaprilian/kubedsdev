<div class="row page-title">
	<div class="small-12 medium-7 column">
		<h2>Repair Planning Processes</h2>
	</div>
	<div class="small-12 medium-5 column page-navigation">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Disassembly for Repair SOP', array('id' => 'disassembly'));?></li>
		<li><?=\Html::anchor('', 'Visual Mapping SOP', array('id' => 'mapping'));?></li>
		<li><?=\Html::anchor('', 'Repair Planning SOP', array('id' => 'planning'));?></li>
		<li><?=\Html::anchor('', 'Parts Cart SOP', array('id' => 'cart'));?></li>
		<li><?=\Html::anchor('', 'Vehicle Staging For Repair SOP', array('id' => 'staging'));?></li>
	</ol>
</div>
<div id="content" class="row">

</div>
<script>
	$('#content').load(baseUrl + 'repair/disassembly.html');
	$('#disassembly').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'repair/disassembly.html');
	});
	$('#mapping').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'repair/mapping.html');
	});
	$('#planning').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'repair/planning.html');
	});
	$('#cart').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'repair/cart.html');
	});
	$('#staging').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'repair/staging.html');
	});
</script>