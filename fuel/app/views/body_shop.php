<div class="row page-title">
	<div class="small-12 medium-6 column">
		<h2>Body Shop Processes</h2>
	</div>
	<div class="small-12 medium-6 column page-navigation">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop/sops', 'Body SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop/products', 'Approved Products', array('class' => 'button warning'));?>
		<?=\Html::anchor('/body-shop/msds', 'MSDS', array('class' => 'button alert'));?>
		<?=\Html::anchor('/body-shop/support', 'Technical Support', array('class' => 'button alert'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'OEM Repair Information', array('id' => 'oemrepair'));?></li>
	</ol>
</div>
<div id="content" class="row">

</div>
<script>
	$('#content').load(baseUrl + 'bodyshop/process/oemrepair.html');
	$('#oemrepair').on('click', function(e) {
		e.preventDefault();
		$.get(baseUrl + 'bodyshop/process/oemrepair.html', {page: 1}, function(html){
			$('#content').html(html);
		});
	});
	$('#content').on('click', '.next-page', function(e) {
		e.preventDefault();
		$.get(baseUrl + 'bodyshop/process/oemrepair.html', {page: 2}, function(html){
			$('#content').html(html);
		});
	});
	$('#content').on('click', '.prev-page',function(e) {
		e.preventDefault();
		$.get(baseUrl + 'bodyshop/process/oemrepair.html', {page: 1}, function(html){
			$('#content').html(html);
		});
	});
</script>