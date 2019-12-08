<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User List Table</h1>
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
                User List Table
            </div>
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user){?>
                            <tr>
                                <td><?php echo $user['userName']; ?></td>
                                <td><?php echo $user['userEmail']; ?></td>
                                <td><?php echo $user['userPhone']; ?></td>
                                <td><?php echo $user['address']; ?></td>
                                <td><?php if($user['isAdmin'] == 1){?><button class="btn btn-primary">Admin</button><?php } else {?><button class="btn btn-small btn-warning">User</button><?php }?></td>
                                <td><a href="<?php echo base_url()?>edit-user/<?php echo $user['id']?>" class="btn btn-primary">Edit</a>&nbsp;<a href="<?php echo base_url()?>delete-user/<?php echo $user['id']?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>