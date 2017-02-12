<form class="form-basic form-profile" method="post" action="/users/profile/submit.json">
	<div class="row">
		<ul class="breadcrumbs">
			<li><a href="/users/dashboard">Dashboard</a></li>
			<li><a class="current" href="#">Profile</a></li>
		</ul>
		<div class="small-12 medium-6 end column">
			<fieldset id="user_fields">
				<h4>My Details</h4>
				<div class="row">
					<input type="hidden" name="data[user][id]" value="<?=$data['user']['id']?>">
					<div class="small-12 medium-4 column">
						<label for="user_photo" class="right inline">Photo Profile</label>
					</div>
					<div class="small-12 medium-8 column">
						<div id="current_photo" class="img-preview">
						</div>
						<div id="file_upload" class="profile-picture-upload">Select File To Upload</div>
						<input name="img_file" type="hidden" id="img_file" />
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-4 column">
						<label for="user_first_name" class="right inline">First Name <span class="astrix">*</span></label>
					</div>
					<div class="small-12 medium-8 column">
						<input type="text" name="data[user][first_name]" id="user_first_name" value="<?=$data['user']['first_name']?>">
					</div>
				</div>

				<div class="row">
					<div class="small-12 medium-4 column">
						<label for="user_last_name" class="right inline">Last Name <span class="astrix">*</span></label>
					</div>
					<div class="small-12 medium-8 column">
						<input type="text" name="data[user][last_name]" id="user_last_name" value="<?=$data['user']['last_name']?>">
					</div>
				</div>

				<div class="row">
					<div class="small-12 medium-4 column">
						<label for="user_phone" class="right inline">Phone <span class="astrix">*</span></label>
					</div>
					<div class="small-12 medium-8 column">
						<input type="tel" name="data[user][phone]" id="user_phone" value="<?=$data['user']['phone']?>">
					</div>
				</div>

				<div class="row">
					<div class="small-12 medium-4 column">
						<label for="user_website" class="right inline">Website <span class="astrix">*</span></label>
					</div>
					<div class="small-12 medium-8 column">
						<input type="text" name="data[user][website]" id="user_website" value="<?=$data['user']['website']?>">
					</div>
				</div>
				
				<div class="row">
					<div class="small-12 medium-4 column">
						<label for="user_unit" class="right inline">Units <span class="astrix">*</span></label>
					</div>
					<div class="small-12 medium-8 column">
						<?=\Form::select('data[user][unit]', $data['user']['unit'], \Model\User::forge()->get_unit(), array('id' => 'user_unit'))?>
					</div>
				</div>
			</fieldset>
			<fieldset id="user_login">
				<h4>Login Details</h4>
				<div class="row">
					<div class="small-12 medium-4 column">
						<label for="user_email" class="right inline">Email <span class="astrix">*</span></label>
					</div>
					<div class="small-12 medium-8 column">
						<input type="email" name="data[user][email]" id="user_email" value="<?=$data['user']['email']?>">
					</div>
				</div>

			</fieldset>
		</div>
		<div class="btn-signup-group">
			<div class="row">
				<div class="small-12 column">
					<button type="button" class="button btn-primary" id="change_password">Change Password</button>
					<button type="button" class="button btn-primary" id="btn_update">Update</button>
				</div>
			</div>
		</div>

	</div>
</form>