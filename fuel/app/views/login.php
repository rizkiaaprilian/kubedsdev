<div class="medium-6 medium-centered large-4 large-centered column">
	<form id="form" method="POST">
		<div class="column log-in-form">
			<h5 class="text-center">Log in with your email or account ID</h5>
			<label>Email
				<input name="email" type="text" placeholder="somebody@example.com">
			</label>
			<label>Account ID
				<input name="userid" type="text" placeholder="K00000">
			</label>
			<label>Password
				<input name="password" type="password" placeholder="Password">
			</label>
			<input name="remember" id="remember" type="checkbox"><label for="remember">Remember Me</label>
			<p id="subp"><a id="submit" type="submit" class="button expanded">Log In</a></p>
			<p class="text-center"><?=\Html::anchor('login/forgot', 'Forgot your password?');?></p>
		</div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$('#submit').on('click', function() {
			$('.callout').remove();
			$.post(baseUrl + 'login/submit.json', $('#form').serialize(), function(json) {
				if (json.status == 'OK') {
					window.location = baseUrl + 'mypage';
				} else {
					$('#subp').before('<div class="callout alert">' + json.msg + '</div>');
				}
			}).fail(function(response) {
				alert('Error: ' + response.responseText);
			});
		});
	});
</script>