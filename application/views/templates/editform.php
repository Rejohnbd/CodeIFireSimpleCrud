<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Form</h1>
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
                Edit Form
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="<?php echo base_url() ?>update-data" method="POST">
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" type="text" placeholder="User Name" value="<?php echo $user['userName']; ?>" name="user_name">
                                <input class="form-control" name="id" type="hidden" value="<?php echo $user['id']; ?>" >
                            </div>
                            <div class="form-group">
                                <label>User Email</label>
                                <input class="form-control" type="email" placeholder="User Email" value="<?php echo $user['userEmail']; ?>" name="user_email">
                            </div>
                            <div class="form-group">
                                <label>User Phone</label>
                                <input class="form-control" type="number" placeholder="User Phone" value="<?php echo $user['userPhone']; ?>" name="user_phone">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" rows="3"> <?php echo $user['address']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Selects</label>
                                <select name="is_admin" class="form-control">
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Update Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>