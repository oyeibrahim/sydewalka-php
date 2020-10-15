<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                <h4>Percent of Maker and Taker fee for each user is the percent of the normal site make and 
                taker fee for spot trading that each user will pay, this is for editing fees for specific 
                users. 100% means user pays all fee, 50% mean user pay half the normal fee</h4>
                <div class="">
                    <table id="ajaxtable" class="datatable2 table table-bordered table-hover" style="font-size:14px">
                        <thead>
                            <tr> 
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('user_id') ?></th>
                                <th><?php echo display('fullname') ?></th>
                                <th><?php echo display('referral_id') ?></th>
                                <th><?php echo display('email') ?></th>
                                <th><?php echo "% of Maker Fee" ?></th>
                                <th><?php echo "% of Taker Fee" ?></th>
                                <th><?php echo display('status') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                             
                        </tbody>
                    </table>
                    <?php //echo $links; ?>
                </div>
            </div> 
        </div>
    </div>
</div>


<script type="text/javascript">

var table;

$(document).ready(function() {   

    //datatables
    table = $('#ajaxtable').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [],        //Initial no order.
        "pageLength": 10,   // Set Page Length
        "lengthMenu":[[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        // "paging": false,
        // "searching": false,

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('backend/user/user/ajax_list')?>",
            "type": "POST",
            "data": {"<?php echo $this->security->get_csrf_token_name(); ?>": "<?php echo $this->security->get_csrf_hash(); ?>"}
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            // "targets": [0,4,7],
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
       "fnInitComplete": function (oSettings, response) {
        //$("#id_show_total").text(response.recordsTotal);
      }

    });
    $.fn.dataTable.ext.errMode = 'none';

});

</script>