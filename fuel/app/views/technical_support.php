<div class="row page-title">
	<div class="small-12 medium-6 column">
		<h2>Technical Support</h2>
	</div>
	<div class="small-12 medium-6 column page-navigation">
		<?=\Html::anchor('#', 'Back', array('class' => 'button', 'id' => 'back'));?>
		<?=\Html::anchor('/mypage', 'Home', array('class' => 'button'));?>
	</div>
</div>
<div class="row small-up-1 medium-up-2 large-up-3 tech-support" id="content">
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.nortonautomotive.com', \Asset::img('tech_support/norton.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.nortonautomotive.com', 'www.nortonautomotive.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.nortonautomotive.com', \Asset::img('tech_support/norton-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.justreps.com', \Asset::img('tech_support/justreps.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.justreps.com', 'www.justreps.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.justreps.com', \Asset::img('tech_support/justreps-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.lord.com', \Asset::img('tech_support/lordfusor.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.lord.com', 'www.lord.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.lord.com', \Asset::img('tech_support/lordfusor-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.autochem.com', \Asset::img('tech_support/autochem.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.autochem.com', 'www.autochem.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.autochem.com', \Asset::img('tech_support/autochem-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.torkusa.com', \Asset::img('tech_support/tork.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.torkusa.com', 'www.torkusa.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.torkusa.com', \Asset::img('tech_support/tork-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.satausa.com', \Asset::img('tech_support/sata.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.satausa.com', 'www.satausa.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.satausa.com', \Asset::img('tech_support/sata-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.sassafety.com', \Asset::img('tech_support/sas.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.sassafety.com', 'www.sassafety.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.sassafety.com', \Asset::img('tech_support/sas-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://www.u-pol.com', \Asset::img('tech_support/upol.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://www.u-pol.com', 'www.u-pol.com', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://www.u-pol.com', \Asset::img('tech_support/upol-qr.png'), array('target' => '_blank'));?>
	</div>
	<div class="column column-block text-center">
		<?=\Html::anchor('http://like90.net', \Asset::img('tech_support/like90.png'), array('target' => '_blank'));?>
		<p><?=\Html::anchor('http://like90.net', 'www.like90.net', array('target' => '_blank'));?></p>
		<?=\Html::anchor('http://like90.net', \Asset::img('tech_support/like90-qr.png'), array('target' => '_blank'));?>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#back').on('click', function(){
			window.history.back();
		});
	});
</script>