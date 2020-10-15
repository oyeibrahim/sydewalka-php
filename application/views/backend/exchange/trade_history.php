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
                            <th>No</th>
                            <th>User</th>
                            <th>Trade</th>
                            <th>Type</th>
                            <th>Order</th>
                            <th>Rate</th>
                            <th>QTY</th>
                            <th>Amount</th>
                            <th>Market</th>
                            <th>Trade Time</th>
                            <th>QTY fees</th>
                            <th>Amount fees</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="usertradeHistory">
                        <?php  foreach ($trade_history as $key => $value) { ?>
                            <tr>
                                <td><?php echo $No++; ?></td>
                                <td><?php echo $value->user_id; ?></td>
                                <td><?php echo $value->bid_type; ?></td>
                                <td><?php echo $value->type; ?></td>
                                <td><?php echo $value->order_type; ?></td>
                                <td><?php echo $value->bid_price ?></td>
                                <td><?php echo $value->complete_qty ?></td>
                                <td><?php echo $value->complete_amount ?></td>
                                <td><?php echo $value->market_symbol ?></td>
                                <td><?php echo $value->success_time ?></td>
                                <td><?php echo $value->qty_fees ?></td>
                                <td><?php echo $value->amount_fees ?></td>
                                <td><?php echo ($value->status==1)?'Complete':'Cancelled' ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>




                <hr>

                <nav aria-label="...">
                <ul class="pagination pagination-sm justify-content-center">
                <?php if($userReq > 1){ ?>
                    <li class="page-item <?php echo ($userReq <= 1)?"disabled":"" ?>">
                        <a class="page-link" href="<?php echo base_url("backend/exchange/exchange/trade_history/"). ((int)$userReq-1) ?>">
                            <span aria-hidden="true">&laquo; Prev</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php } ?>

                    <?php if($userReq < $pageNum){ ?>
                    <li class="page-item <?php echo ($userReq >= $pageNum)?"disabled":"" ?>">
                        <a class="page-link" href="<?php echo base_url("backend/exchange/exchange/trade_history/"). ((int)$userReq+1) ?>">
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

 