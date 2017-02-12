<div class="row">
	<div class="small-7 column">
		<h2>Check-In Processes</h2>
	</div>
	<div class="small-5 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'Check In Vehicle', array('id' => 'checkin'));?></li>
		<li><?=\Html::anchor('', 'Customer Information Form', array('id' => 'information'));?></li>
		<li><?=\Html::anchor('', 'Pre-Repair Inspection Checklist', array('id' => 'checklist'));?></li>
		<li><?=\Html::anchor('', 'Additional Forms', array('id' => 'forms'));?></li>
	</ol>
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'checkin/process.html');
	$('#checkin').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'checkin/process.html');
	});
	$('#information').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'checkin/information.html');
	});
	$('#checklist').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'checkin/checklist.html');
	});
	$('#forms').on('click', function(e) {
		e.preventDefault();
		$('#content').load(baseUrl + 'checkin/forms.html');
	});
</script>