<div class="row">
	<div class="small-6 column">
		<h2>MSDS - Body Shop</h2>
	</div>
	<div class="small-6 column text-right">
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
		<?=\Html::anchor('/body-shop/sops', 'Body SOPs', array('class' => 'button'));?>
	</div>
</div>
<div class="row column msds" id="content">
	
</div>
<script>
	$(document).ready(function(){
		$('#content').load(baseUrl + 'bodyshop/msdspage/index.html');
		$('#content').on('click', '#page_1', function(){
			$.get(baseUrl + 'bodyshop/msdspage/index.html', {page: 1}, function(html){
				$('#content').html(html);
			});
		});
		$('#content').on('click', '#page_2', function(){
			$.get(baseUrl + 'bodyshop/msdspage/index.html', {page: 2}, function(html){
				$('#content').html(html);
			});
		});
		$('#content').on('click', '#page_3', function(){
			$.get(baseUrl + 'bodyshop/msdspage/index.html', {page: 3}, function(html){
				$('#content').html(html);
			});
		});
	});
</script>