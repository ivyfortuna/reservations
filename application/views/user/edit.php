<?php echo form_open('user/edit/'.$user['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="role" class="col-md-4 control-label">Role</label>
		<div class="col-md-8">
			<input type="checkbox" name="role" value="1" <?php echo ($user['role']==1 ? 'checked="checked"' : ''); ?> id='role' />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>