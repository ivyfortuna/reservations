<div class="modal fade" id="add_user_modal" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-simple">
        <form id="add_modal_form" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">Add new user</h4>
            </div>
            <div class="modal-body">

                <div class="row">

                    <div class="col-xl-12 form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>

                            <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />

                    </div>
                    <div class="col-xl-12 form-group">
                        <label for=email" class="col-md-4 control-label">Email</label>

                            <input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />

                    </div>
                    <div class="col-xl-12 form-group">
                        <label for="password" class="col-md-4 control-label">Password</label>

                            <input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
                    </div>
                    <div class="col-xl-12 form-group">
                        <label for="role" class="col-md-4 control-label">Role</label>

                        <input type="radio" name="role" value="1" id="yes" />Administrator</br>
                        <input type="radio" name="role" value="0" id="no" />User</br>

                    </div>


                    <div class="col-md-12 float-right">
                        <button id="add_user" class="btn btn-icon btn-block btn-primary btn-outline mt-3"  type="button">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>