<div class="small-4 small-centered column box">
	<h3>Administration Login</h3>
	<hr>
	<form action="<?=\Uri::create('admin/login');?>" method="post">
		<?=$message;?>
		<label for="email">Email: </label>
		<input name="email" type="text" id="email" value="<?=$email;?>" size="40" />
		<label for="passwrd">Password: </label>
		<input type="password" name="passwrd" id="passwrd" />
		<input type="submit" name="login" value="Login" class="button" />
	</form>
</div>