<div class="row">
	<div class="small-7 column">
		<h2>Vehicle Delivery Processes</h2>
	</div>
	<div class="small-5 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Delivery Steps', array('id' => 'steps'));?></li>
		<li><?=\Html::anchor('', 'Pre-Delivery Inspection Checklist', array('id' => 'inspection'));?></li>
		<li><?=\Html::anchor('', 'Additional Forms', array('id' => 'additional'));?></li>
	</ol>
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'delivery/steps.html');
	$('#steps').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'delivery/steps.html');
	});
	$('#inspection').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'delivery/inspection.html');
	});
	$('#additional').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'delivery/additional.html');
	});
</script>