<div class="row page-title">
	<div class="small-12 medium-6 column">
		<h2>MSDS - Body Shop</h2>
	</div>
	<div class="small-12 medium-6 column page-navigation">
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