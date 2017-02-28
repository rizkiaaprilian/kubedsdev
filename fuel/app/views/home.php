<div class="row show-for-small-only text-center">
	<div class="column with-arrow">
		<?=\Asset::img('home-01.png');?><br>1. CHECK IN VEHICLE<br><a href="mypage/checkin" class="button process">Process</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-02.png');?><br>2. OFFICE<br><a href="mypage/office" class="button process">Process</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		3. REPAIR PLANNING/DISASSEMBLY &amp; MAPPING<br>
		<?=\Asset::img('home-02.png');?><span class="fi-arrow-left"></span><a href="mypage/repair" class="button process">Process</a><span class="fi-arrow-right"></span><?=\Asset::img('home-03.png');?><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-03.png');?><br>4. BODY SHOP<br><a href="body-shop" class="button sop">BODY SOPs</a> <a href="body-shop/sops" class="button process">Process</a> <a href="body-shop/products" class="button products">APPROVED PRODUCTS</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-03.png');?><br>5. PAINT SHOP<br><a href="paint-shop" class="button sop">PAINT SOPs</a> <a href="paint-shop/sops" class="button process">Process</a> <a href="paint-shop/products" class="button products">APPROVED PRODUCTS</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-03.png');?><br>6. REASSEMBLY<br><a href="reassembly" class="button sop">REASSEMBLY SOPs</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-03.png');?><br>7. DETAIL SHOP<br><a href="detail-shop" class="button sop">DETAIL SOPs</a> <a href="detail-shop/sops" class="button process">Process</a> <a href="detail-shop/products" class="button products">APPROVED PRODUCTS</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-02.png');?><br>OFFICE<br><a href="mypage/office" class="button process">Process</a><br><span class="fi-arrow-down"></span>
	</div>
	<div class="column with-arrow">
		<?=\Asset::img('home-01.png');?><br>8. DELIVER VEHICLE<br><a href="mypage/delivery" class="button process">Process</a>
	</div>
</div>
<div class="row column show-for-medium text-center">
	<?=\Asset::img('kube-home.png', array('usemap' => '#homemap'));?>
	<map name="homemap">
		<area shape="rect" coords="33,216,128,240" href="mypage/checkin" />
		<area shape="rect" coords="197,352,294,377" href="mypage/office" />
		<area shape="rect" coords="611,112,707,137" href="mypage/repair" />
		<area shape="rect" coords="905,63,1002,87" href="body-shop" />
		<area shape="rect" coords="905,31,1002,55" href="body-shop/sops" />
		<area shape="rect" coords="907,95,1001,130" href="body-shop/products" />
		<area shape="rect" coords="913,527,1011,551" href="paint-shop" />
		<area shape="rect" coords="914,496,1009,520" href="paint-shop/sops" />
		<area shape="rect" coords="914,555,1010,589" href="paint-shop/products" />
		<area shape="rect" coords="454,527,550,551" href="detail-shop" />
		<area shape="rect" coords="455,495,551,521" href="detail-shop/sops" />
		<area shape="rect" coords="455,558,552,594" href="detail-shop/products" />
		<area shape="rect" coords="32,331,128,356" href="mypage/delivery" />
		<area shape="rect" coords="670,495,805,521" href="mypage/reassembly" />
	</map>
</div>
