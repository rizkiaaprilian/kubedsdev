<div class="row">
	<h2 class="small-10 column">Users</h2>
	<p class="small-2 column button" id="add_user">Add User</p>
</div>
<div class="row column">
	<table id="datalist" class="show clickable">
		<thead>
			<tr>
				<th>User ID</th>
				<th>Email</th>
				<th>Company</th>
				<th>Last Login</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr id="id_<?=$user['id'];?>" title="Click to edit <?=$user['user_id'];?>">
					<td><?=$user['user_id'];?></td>
					<td><?=$user['email'];?></td>
					<td><?=$user['bus_name'];?></td>
					<td><?=$user['last_login'];?></td>
					<td><?=$status[$user['status_id']];?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="reveal small" id="user_profile" data-reveal data-options="closeOnClick:false;"></div>
<script>
	$(document).ready(function() {
		$('#datalist').DataTable({
			iDisplayLength: 50
		});
		$('#datalist tbody').on('click', 'tr', function () {
			var data = $(this).prop('id');
			$.get('/admin/user/update.html?id=' + data.substring(3), function(html){
				$('#user_profile').html(html).foundation('open');
			});
		});
		$('#add_user').on('click', function() {
			$.get('/admin/user/update.html', function(html){
				$('#user_profile').html(html).foundation('open');
			});
		});
	});
</script>
