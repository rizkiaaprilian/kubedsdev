<div class="medium-6 medium-centered large-4 large-centered column">
	<form id="form" method="POST">
		<div class="column log-in-form">
			<h5 class="text-center">Reset Password</h5>
			<label>New password
				<input name="passwrd" type="password">
			</label>
			<label>New password again
				<input name="passwrd2" type="password">
			</label>
			<p id="instruct">Enter your new password above. Min 8 characters and must containe at least one Uppercase, one lowercase and one number. Once save you will be asked to login to your account.</p>
			<input type="hidden" name="id" value="<?=$id;?>">
			<button type="button" class="button expanded" id="reset" name="reset">Reset Now</button>
		</div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$('#reset').on('click', function() {
			$('.callout').remove();
			$.post(baseUrl + 'login/reset.json', $('#form').serialize(), function(json) {
				if (json.status == 'OK') {
					window.location = '/login';
				} else {
					$('#instruct').before('<div class="callout alert">' + json.msg + '</div>');
				}
			}).fail(function(response) {
				alert('Error: ' + response.responseText);
			});
		});
	});
</script>