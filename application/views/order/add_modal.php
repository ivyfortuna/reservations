<div class="modal fade" id="add_order_modal" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-simple">
        <form id="add_modal_form" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">Add new order</h4>
            </div>
            <div class="modal-body">
<p>Id <?=$_SESSION['user']['id']?></p>
                <div class="row">

                    <div class="col-xl-12 form-group">
                        <label for="date" class="col-md-4 control-label">Date</label>

                            <input type="date" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />

                    </div>
                    <div class="col-xl-12 form-group">
                        <label for=reason" class="col-md-4 control-label">Reason</label>

                            <input type="text" name="reason" value="<?php echo $this->input->post('reason'); ?>" class="form-control" id="reason" />

                    </div>
                    <div class="col-xl-12 form-group">
                        <label for="id_destination" class="col-md-4 control-label">Destination</label>

                    <!-- Select with all the destinations.-->
                        <select class="form-control" id="id_destination" name="id_destination">
                        <?php foreach($destination as $d){ ?>
                            <option value="<?=$d['id']?>"><?=$d['name']?></option>
                        <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-12 float-right">
                        <button id="add_order" class="btn btn-icon btn-block btn-primary btn-outline mt-3"  type="button">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>