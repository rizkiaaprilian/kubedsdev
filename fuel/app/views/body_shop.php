<div class="row">
	<div class="small-7 column">
		<h2>Body Shop Processes</h2>
	</div>
	<div class="small-5 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/mypage/body-shop/sops', 'Body SOPs', array('class' => 'button'));?>
		<?=\Html::anchor('/mypage/body-shop/products', 'Approved Products', array('class' => 'button warning'));?>
	</div>
</div>
<div class="row column">
	<ol class="menu">
		<li><?=\Html::anchor('', 'OEM Repair Information', array('id' => 'oemrepair'));?></li>
	</ol>
</div>
<div class="row column" id="content">

</div>
<script>
	$('#content').load(baseUrl + 'bodyshop/oemrepair.html');
	$('#oemrepair').on('click', function(e) {
		e.preventDefault();
		$.get(baseUrl + 'bodyshop/oemrepair.html', {page: 1}, function(html){
			$('#content').html(html);
		});
	});
	$('#content').on('click', '.next-page', function(e) {
		e.preventDefault();
		$.get(baseUrl + 'bodyshop/oemrepair.html', {page: 2}, function(html){
			$('#content').html(html);
		});
	});
	$('#content').on('click', '.prev-page',function(e) {
		e.preventDefault();
		$.get(baseUrl + 'bodyshop/oemrepair.html', {page: 1}, function(html){
			$('#content').html(html);
		});
	});
</script>