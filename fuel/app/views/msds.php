<div class="row">
	<div class="small-6 column">
		<h2>MSDS - Body Shop</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop/sops', 'Body SOPs', array('class' => 'button'));?>
	</div>
</div>
<div id="content"></div>
<script>
	$(document).ready(function(){
		$('#content').load(baseUrl + 'bodyshop/msdspage/index.html');
	});
</script>