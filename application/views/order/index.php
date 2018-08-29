

    <div class="text-center">
        <button data-toggle="modal" data-target="#add_order_modal" class="btn btn-success">Novo</button>

        <h2><?php if($_SESSION['user_table']==0){
                echo 'All';
            }else {
                foreach ($users as $u) {
                    if($_SESSION['user_table']==$u['id']){
                        echo $u['name'];}
                }
            }?>
        </h2>
    </div><br>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">

    <form id="users" method="post">
        <div class="form-group">

                <div class="col-xl-12 form-group">
                    <label for="id_destination" class="col-md-4 control-label">Agents</label>

                    <!-- Select with all the users.-->
                    <select class="form-control" id="id_user" name="id_user">
                        <option value="0">All</option>
                        <?php foreach($users as $u){ ?>
                            <option value="<?=$u['id']?>"><?=$u['name']?></option>
                        <?php } ?>
                    </select>
                </div>
        </div>
        <button id='enviar' type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
        <table id="orderTable" class="table table-striped table-bordered sortable" role="grid" aria-describedby="orderTable_info">
            <thead>
                <tr role="">
                    <th>ID</th>
                    <th>Date</th>
                    <th>Reason</th>
                    <th>Destination</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $o){
               if(isset($o['id_destination']))
                   foreach($destination as $d){
                       if($o['id_destination']==$d['id']){
                           $des=$d['name'];
                       }
                   }
                if(isset($o['id_user']))
                    foreach($users as $u){
                        if($o['id_user']==$u['id']){
                            $user=$u['name'];
                        }
                    }

                ?>

            <tr>
                <td><?php echo $o['id']; ?></td>
                <td><?php echo $o['date']; ?></td>
                <td><?php echo $o['reason']; ?></td>
                <td><?php echo $des; ?></td>
                <td><?php echo $user; ?></td>
            </tr>
            <?php  } ?>
            </tbody>
        </table>

        <?=$this->pagination->create_links();?>

    </div>
</div>


<?php echo isset($add_modal) ? $add_modal : '' ; ?>