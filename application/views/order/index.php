

    <div class="pull-right">
        <button data-toggle="modal" data-target="#add_order_modal" class="btn btn-success">Novo</button>
    </div>

    <form>
        <div class="form-group">

                <div class="col-xl-12 form-group">
                    <label for="id_destination" class="col-md-4 control-label">Destination</label>

                    <!-- Select with all the users.-->
                    <select class="form-control" id="users" name="user">
                        <?php foreach($users as $u){ ?>
                            <option value="<?=$u['id']?>"><?=$u['name']?></option>
                        <?php } ?>
                    </select>
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

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

<?php echo isset($add_modal) ? $add_modal : '' ; ?>