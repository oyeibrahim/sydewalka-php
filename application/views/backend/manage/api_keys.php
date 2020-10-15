<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                

                <table class="datatable2 table table-bordered table-hover" style="font-size:12px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Key</th>
                            <th>1h</th>
                            <th>24h</th>
                            <th>Week</th>
                            <th>Month</th>
                            <th>Status</th>
                            <th>Set Active/Inactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     <tbody>
                         <?php foreach($apis as $key => $api){ ?>
                        
                        <tr>
                          <th><?php echo $No++ ?></th>
                          <td><?php echo $api->user_id ?></td>
                          <td><?php echo $api->api_key ?></td>
                          <td><?php echo $api->h1 ?></td>
                          <td><?php echo $api->h24 ?></td>
                          <td><?php echo $api->w1 ?></td>
                          <td><?php echo $api->m1 ?></td>

                          <?php 
                              $sta="";
                              $staCls="";
                              if($api->status == 1){
                                  $sta = "ACTIVE";
                                  $staCls = "label-success text-white text-center";
                              }
                              if($api->status == 0){
                                  $sta = "INACTIVE";
                                  $staCls = "label-warning text-white text-center";
                              }

                          ?>
                          <td class="<?php echo $staCls ?>"><?php echo $sta ?></td>
                          
                          <td><a class="btn btn-danger" style='font-size:12px' href="<?php echo base_url("backend/manage/change_api_key_status/".$api->api_key."/") ?><?php echo ($api->status == 1)?0:1 ?>">Change Status</a></td>
                          <td><a class="btn btn-danger" style='font-size:12px' href="<?php echo base_url("backend/manage/delete_api_key/".$api->user_id."/".$api->id) ?>">Delete</a></td>
                        </tr>
                        
                        <?php } ?>
                        
                     </tbody>
                </table>

                <hr>

                <nav class="text-center" aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center">
                        
                        <li class="page-item <?php echo ($userReq <= 1)?"disabled":"" ?>">
                            <a class="page-link" href="<?php echo base_url("backend/manage/api_keys/"). ((int)$userReq-1) ?>">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item <?php echo ($userReq >= $pageNum)?"disabled":"" ?>">
                            <a class="page-link" href="<?php echo base_url("backend/manage/api_keys/"). ((int)$userReq+1) ?>">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>


                
            </div>
        </div>
    </div>
</div>