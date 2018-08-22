<?php echo form_open('order/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="date" class="col-md-4 control-label">Date</label>
		<div class="col-md-8">
			<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />
		</div>
	</div>
	<div class="form-group">
		<label for="reason" class="col-md-4 control-label">Reason</label>
		<div class="col-md-8">
			<input type="text" name="reason" value="<?php echo $this->input->post('reason'); ?>" class="form-control" id="reason" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_destination" class="col-md-4 control-label">Id Destination</label>
		<div class="col-md-8">
			<input type="text" name="id_destination" value="<?php echo $this->input->post('id_destination'); ?>" class="form-control" id="id_destination" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_user" class="col-md-4 control-label">Id User</label>
		<div class="col-md-8">
			<input type="text" name="id_user" value="<?php echo $this->input->post('id_user'); ?>" class="form-control" id="id_user" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>