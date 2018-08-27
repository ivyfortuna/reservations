

    <div class="text-center">
        <button data-toggle="modal" data-target="#add_order_modal" class="btn btn-success">Novo</button>
    </div><br>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
            <form>
                <div class="form-group">
                            <label for="id_destination" class="control-label">Users</label>

                            <!-- Select with all the users.-->
                            <select class="form-control" id="id_user" name="id_user">
                                <?php foreach($users as $u){ ?>
                                    <option value="<?=$u['id']?>"><?=$u['name']?></option>
                                <?php } ?>
                            </select>
                </div>
                <button id="orderId" type="button" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
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
        </div>
    </div>
<?php echo isset($add_modal) ? $add_modal : '' ; ?>