<div class="pull-right">
	<a href="<?php echo site_url('destination/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($destinations as $d){ ?>
    <tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['name']; ?></td>
		<td>
            <a href="<?php echo site_url('destination/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('destination/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
