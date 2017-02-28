<div class="modal-header">
	<h4>User Profile</h4>
	<button class="close-button" data-close type="button"> <span>&times;</span></button>
</div>
<div class="modal-body">
	<form id="user_form" name="user_form" method="post" action="">
		<div class="row">
			<div class="small-3 column">
				<label for="user_id">User ID <span class="astrict">*</span></label>
			</div>
			<div class="small-9 column">
				<input type="text" class="" name="data[user_id]" id="user_id" value="<?=$data['user_id'];?>"/>
			</div>
		</div>
		<div class="row">
			<div class="small-3 column">
				<label for="email">Email <span class="astrict">*</span></label>
			</div>
			<div class="small-9 column">
				<input type="text" class="" name="data[email]" id="email" value="<?=$data['email'];?>"/>
			</div>
		</div>
		<div class="row">
			<div class="small-3 column">
				<label for="bus_name">Company <span class="astrict">*</span></label>
			</div>
			<div class="small-9 column">
				<input type="text" class="" name="data[bus_name]" id="bus_name" value="<?=$data['bus_name'];?>"/>
			</div>
		</div>
		<div class="row">
			<div class="small-3 column">
				<label for="passwrd">Password <span class="astrict">*</span></label>
			</div>
			<div class="small-9 column">
				<input type="text" class="" name="passwrd" id="passwrd"/>
			</div>
		</div>
		<div class="row">
			<div class="small-3 column">
				<label for="status_id">Status</label>
			</div>
			<div class="small-9 column">
				<?= \Form::select('data[status_id]', $data['status_id'], $cboStatus); ?>
			</div>
		</div>
		<div class="row column" id="btn">
			<div class="float-left">
				<input type="hidden" name="data[id]" id="id" value="<?=$data['id']?>">
				<button type="button" class="button" id="update" name="update">Save</button>
				<button type="button" class="button" id="btn_close" name="btn_close" data-close>Cancel</button>
			</div>
			<div class="float-right">
				<button type="button" class="button warning" id="reset" name="reset">Reset Password</button>
			</div>
		</div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$('#update').on('click', function() {
			$('.callout.alert').remove();
			$.post(baseUrl + 'admin/user/save.json', $('#user_form').serialize(), function(json) {
				if (json.status == 'OK') {
					//location.reload();
				} else {
					$('#btn').before('<div class="callout alert">' + json.msg + '</div>');
				}
			});
		});

		$('#reset').on('click', function(){
			$('.callout.alert').remove();
			$.post(baseUrl + 'admin/user/reset.json', $('#user_form').serialize(), function(json){
				if (json.status == 'OK') {
					//location.reload();
				} else {
					$('#btn').before('<div class="callout alert">' + json.msg + '</div>');
				}
			});
		});
	});
	$( document ).ajaxError(function( event, request, settings, error ) {
	  var errmsg = '1';
	});
	//# sourceURL=dialoguser.php
</script>