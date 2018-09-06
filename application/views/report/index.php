<div class="text-center">
    <form id="month" method="post">
        <input type="month"  name="month">
        <button id='enviar_report' type="submit" class="btn btn-primary">Submit</button>
        <button id='crear_pdf' type="submit" class="btn btn-primary">Create PDF</button>
    </form>
</div></br>
<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
    <h1><?=$_SESSION['month']?></h1>
        <?php
        $last_date=0;
        $i=0;
        foreach($reports as $r){
            if(isset($r['id_destination']))
                foreach($destination as $d){
                    if($r['id_destination']==$d['id']){
                        $des=$d['name'];
                    }
                }
            if (isset($r['id_pickup_destination'])) {
                foreach ($destination as $d) {
                    if ($r['id_pickup_destination'] == $d['id']) {
                        $pick = $d['name'];
                    }
                }
            }
            if(isset($r['id_user']))
                foreach($users as $u){
                    if($r['id_user']==$u['id']){
                        $user=$u['name'];
                    }
                }

                if($last_date!=$r['date']){
                    $i++;
            ?>
            <h2><?php echo substr($r['date'], 0,10); ?></h2>
            <table class="table table-striped table-bordered sortable" role="grid" aria-describedby="orderTable_info">
                <thead>
                    <tr role="">
                        <th>Destination</th>
                        <th>Pick Up</th>
                        <th>User</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody id=<?=$i?>>
                    <tr>
                    <td><?php echo $des; ?></td>
                    <td><?=$pick?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $r['reason']; ?></td>
                    </tr>
                </tbody>
            </table>
        <?php }else{ ?>
            <script>
                document.getElementById(<?= $i ?>).innerHTML += "<tr>\n" +
                    "                    <td><?php echo $des; ?></td>\n" +
                    "                    <td><?php echo $user; ?></td>\n" +
                    "                    <td><?php echo $r['reason']; ?></td>\n" +
                    "                    </tr>"
            </script>
        <?php } ?>

        <?php
        $last_date=$r['date'];
        }
        ?>
    <h3>Total orders: <?= $reportsCount ?></h3>
</div>
