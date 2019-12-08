<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Data Form</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata()){?>
        <div class="alert <?php if($this->session->flashdata('status')==='success'){ ?> alert-success <?php } else {?>alert-danger<?php }?>">
            <?php echo $this->session->flashdata('message');?>
        </div>
        <?php }?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Data Form
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="<?php echo base_url() ?>save-data" method="POST">
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" type="text" placeholder="User Name" name="user_name">
                            </div>
                            <div class="form-group">
                                <label>User Email</label>
                                <input class="form-control" type="email" placeholder="User Email" name="user_email">
                            </div>
                            <div class="form-group">
                                <label>User Phone</label>
                                <input class="form-control" type="number" placeholder="User Phone" name="user_phone">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Selects</label>
                                <select name="is_admin" class="form-control">
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>