<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                <table class="datatable2 table table-bordered table-hover" style="font-size:10px">
                    <thead>
                        <tr class="table-bg">
                            <th class="date">No</th>
                            <th class="date">User</th>
                            <th class="date">Trade</th>
                            <th class="date">Type</th>
                            <th class="date">Order</th>
                            <th class="date">Rate</th>
                            <th class="date">Total QTY</th>
                            <th class="date">Available QTY</th>
                            <th class="date">Total Amount</th>
                            <th class="date">Available Amount</th>
                            <th class="date">Market</th>
                            <th class="date">Open</th>
                            <th class="date">Status</th>
                        </tr>
                    </thead>
                    <tbody id="useropenTrade">
                        <?php  foreach ($trades as $key => $value) { ?>
                            <tr>
                                <td><?php echo $No++; ?></td>
                                <td><?php echo $value->user_id; ?></td>
                                <td><?php echo $value->bid_type; ?></td>
                                <td><?php echo $value->type; ?></td>
                                <td><?php echo $value->order_type; ?></td>
                                <td><?php echo $value->bid_price; ?></td>
                                <td><?php echo $value->bid_qty; ?></td>
                                <td><?php echo $value->bid_qty_available; ?></td>
                                <td><?php echo $value->total_amount; ?></td>
                                <td><?php echo $value->amount_available; ?></td>
                                <td><?php echo $value->market_symbol; ?></td>
                                <td><?php echo $value->open_order; ?></td>
                                <td><?php echo ($value->status == 0)?"CANCELLED":(($value->status == 1)?"COMPLETED":(($value->status == 2)?"RUNNING":"PENDING TRIGGER")); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>




                <hr>

                <nav aria-label="...">
                <ul class="pagination pagination-sm justify-content-center">
                <?php if($userReq > 1){ ?>
                    <li class="page-item <?php echo ($userReq <= 1)?"disabled":"" ?>">
                        <a class="page-link" href="<?php echo base_url("backend/exchange/exchange/all_order/"). ((int)$userReq-1) ?>">
                            <span aria-hidden="true">&laquo; Prev</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php } ?>

                    <?php if($userReq < $pageNum){ ?>
                    <li class="page-item <?php echo ($userReq >= $pageNum)?"disabled":"" ?>">
                        <a class="page-link" href="<?php echo base_url("backend/exchange/exchange/all_order/"). ((int)$userReq+1) ?>">
                            <span aria-hidden="true">Next &raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <?php } ?>
                    
                </ul>
                </nav>





            </div> 
        </div>
    </div>
</div>

 