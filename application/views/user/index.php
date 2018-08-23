 <div class="pull-right">
        <button data-toggle="modal" data-target="#add_user_modal" class="btn btn-success">Novo</button>
    </div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Role</th>
		<th>Password</th>
		<th>Name</th>
		<th>Email</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['role']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['name']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<?php echo isset($add_modal) ? $add_modal : '' ; ?>