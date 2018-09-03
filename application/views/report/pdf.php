<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
    <?php
    $last_date=0;
    foreach($reports as $r) {
    if (isset($r['id_destination'])) {
        foreach ($destination as $d) {
            if ($r['id_destination'] == $d['id']) {
                $des = $d['name'];
            }
        }
    }
    if (isset($r['id_pickup_destination'])) {
        foreach ($destination as $d) {
            if ($r['id_pickup_destination'] == $d['id']) {
                $pick = $d['name'];
            }
        }
    }
    if (isset($r['id_user'])) {
        foreach ($users as $u) {
            if ($r['id_user'] == $u['id']) {
                $user = $u['name'];
            }
        }
    }
    if ($last_date != $r['date']) { ?>

    <h2><?php echo substr($r['date'], 0, 10); ?></h2>
    <table class="table table-striped table-bordered sortable" role="grid" aria-describedby="orderTable_info">
        <thead>
        <tr role="">
            <th><b>Destination</b></th>
            <th><b>Pick up</b></th>
            <th><b>User</b></th>
            <th><b>Reason</b></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $des; ?></td>
            <td><?php echo $pick; ?></td>
            <td><?php echo $user; ?></td>
            <td><?php echo $r['reason']; ?></td>
        </tr>

        <?php $last_date = $r['date']; } else { ?>
            <tr>
                <td><?php echo $des; ?></td>
                <td><?php echo $pick; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $r['reason']; ?></td>
            </tr>

            <?php
            $last_date = $r['date'];
        }
        ?>


<?php


}?>

        <h3>Total reports: <?= $reportsCount ?></h3>
