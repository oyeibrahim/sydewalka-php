<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2>Chat Admin List</h2>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table id="ajaxtable" class="datatable2 table table-bordered table-hover">
                        <thead>
                            <tr> 
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('user_id') ?></th>
                                <th><?php echo display('fullname') ?></th>
                                <th><?php echo display('email') ?></th>
                                <th>Is Chat Admin</th>
                                <th>Chat Admin ID</th>
                                <th><?php echo display('status') ?></th> 
                            </tr>
                        </thead>

   <tbody>
  
    <?php foreach ($admins as $key => $admin) { ?>
        <tr>
        <td><?php echo $No++ ?></td>
        <td><?php echo $admin->user_id ?></td>
        <td><?php echo $admin->first_name." ".$admin->last_name ?></td>
        <td><?php echo $admin->email ?></td>
        <td><?php echo ($admin->is_chat_admin == 1)?"YES / 1":"NO / 0" ?></td>
        <td><?php echo $admin->chat_admin_id ?></td>
        <td><a class="badge badge-info" href="<?php echo base_url("backend/user/user/form/").$admin->id ?>">Edit User</a></td>
        </tr>
    <?php } ?>
  </tbody>

                    </table>



<nav aria-label="...">
  <ul class="pagination pagination-sm justify-content-center">
    
    <?php if ($userReq > 1){ ?>
    <li class="page-item">
        <a class="page-link" href="<?php echo base_url("backend/user/user/chat_admins/"). ((int)$userReq-1) ?>">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
    </li>
    <?php } ?>

    <?php if ($userReq < $pageNum){ ?>
    <li class="page-item">
        <a class="page-link" href="<?php echo base_url("backend/user/user/chat_admins/"). ((int)$userReq+1) ?>">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
        </a>
    </li>
    <?php } ?>
    
  </ul>
</nav>



                    <?php //echo $links; ?>
                </div>
            </div> 
        </div>
    </div>
</div>

