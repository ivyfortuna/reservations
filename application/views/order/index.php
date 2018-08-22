

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Date</th>
		<th>Reason</th>
		<th>Destination</th>
		<th>Id User</th>
    </tr>
	<?php foreach($orders as $o){ ?>
    <tr>
		<td><?php echo $o['id']; ?></td>
		<td><?php echo $o['date']; ?></td>
		<td><?php echo $o['reason']; ?></td>
		<td><?php echo $o['id_destination']; ?></td>
		<td><?php echo $o['id_user']; ?></td>
    </tr>
	<?php } ?>
</table>
