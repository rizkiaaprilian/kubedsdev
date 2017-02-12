<div class="medium-6 medium-centered large-4 large-centered column">
	<form id="form" method="POST">
		<div class="column log-in-form">
			<h5 class="text-center">Forgot your password</h5>
			<label>Email
				<input name="email" type="text" placeholder="somebody@example.com">
			</label>
			<label>Account ID
				<input name="userid" type="text" placeholder="K00000">
			</label>
			<p id="instruct">Enter your email or account ID above. An email with reset instructions will be sent to the email address for you account.</p>
			<button type="button" class="button expanded" id="reset" name="reset">Reset Now</button>
			<button type="button" class="button expanded" id="login" name="reset">Login</button>
		</div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$('#login').on('click', function() {
			window.location = '/login';
		});
		$('#reset').on('click', function() {
			$('.callout').remove();
			$.post(baseUrl + 'login/forgot/submit.json', $('#form').serialize(), function(json) {
				if (json.status == 'OK') {
					$('#instruct').html('<div class="callout alert">' + json.msg + '</div>');
					$('#reset').addClass('disabled');
				} else {
					$('#instruct').before('<div class="callout alert">' + json.msg + '</div>');
				}
			}).fail(function(response) {
				alert('Error: ' + response.responseText);
			});
		});
	});
</script>