<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                    <div class="table-responsive">
                        <table class="datatable2 table table-bordered table-hover">

                        <thead>
                            <tr> 
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('email') ?></th>
                                <th><?php echo "Status" ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($subscriber!=NULL){ 
                                $i=1;
                                foreach ($subscriber as $key => $value) {  
                            ?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $value->email;?></td>
                                <td><?php echo ($value->status == 1)?"Active":"Inactive";?></td>
                            </tr>
                            <?php } } ?>

                        </tbody>
                    </table>
                    <?php echo $links; ?>
                </div>
            </div> 
        </div>
    </div>
</div>