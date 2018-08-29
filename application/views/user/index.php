 <div class="text-center">
        <button data-toggle="modal" data-target="#add_user_modal" class="btn btn-success">Novo</button>
    </div><br>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

    <table class="table table-striped table-bordered sortable">
        <tr>
            <th>ID</th>
            <th>Admin</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach($users as $u){ ?>
        <tr>
            <td><?php echo $u['id']; ?></td>
            <td><?php if($u['role']==0){echo 'User';}else{echo 'Admin';} ?></td>
            <td><?php echo $u['name']; ?></td>
            <td><?php echo $u['email']; ?></td>
            <td>
                <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a>
                <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
<?php echo isset($add_modal) ? $add_modal : '' ; ?>