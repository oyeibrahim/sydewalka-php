<div class="content">
	<div class="row">
		<div class="col-sm-12">

			 <?php echo form_open("backend/user/user/user_details") ?>
			<div class="form-group row">
                <label for="user_id" class="col-sm-2 col-form-label">User ID: </label>
                <div class="col-xs-2 col-sm-10 col-md-4 m-b-20">
                    <input name="user_id" class="form-control" type="search" id="user_id" value="<?php echo @$user->user_id ?>">
                </div>
                <div class="col-xs-2 col-sm-10 col-md-4 m-b-20">
                    <button type="submit" class="btn btn-success  w-md m-b-5">Search</button>
                </div>

            </div>
            <?php echo form_close() ?>

		</div>
	</div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 m-b-20">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li><a href="#tab1" data-toggle="tab">Profile</a></li>
                <li class="active"><a href="#tab2" data-toggle="tab">Balance</a></li>
                <li><a href="#tab3" data-toggle="tab">Balance Log</a></li>
                <li><a href="#tab4" data-toggle="tab">Trades</a></li>
                <li><a href="#tab5" data-toggle="tab">Address</a></li>
                <li><a href="#tab6" data-toggle="tab">FIAT</a></li>
                <li><a href="#tab7" data-toggle="tab">Service</a></li>
                <li><a href="#tab8" data-toggle="tab">Contract</a></li>
                <li><a href="#tab9" data-toggle="tab">Investment</a></li>
                <li><a href="#tab10" data-toggle="tab">Support</a></li>
                <li><a href="#tab11" data-toggle="tab">API</a></li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
                <div class="tab-pane fade" id="tab1">
                    <div class="panel-body">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('user_id') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo $u1=@$user->user_id ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('referral_id') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->referral_id ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('language') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->language ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('firstname') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->first_name ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('lastname') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->last_name ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('email') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->email ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('mobile') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->phone ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('registered_ip') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo @$user->ip ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('status') ?></label>
		                        <div class="col-sm-8">
		                            <?php echo (@$user->status==1)?display('active'):display('inactive'); ?></span>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="cid" class="col-sm-4 col-form-label">Registered Date</label>
		                        <div class="col-sm-8">
		                            <?php 
		                                $date=date_create(@$user->created);
		                                echo date_format($date,"jS F Y");  
		                            ?></span>
		                        </div>
		                    </div>
		                </div>
		            </div>
                </div>
				<!-- tab -->
                <div class="tab-pane fade in active" id="tab2">
                    <div class="panel-body" style="overflow-x:scroll;">

					<div class="panel-heading">
						<div class="panel-title">
							<h2><?php echo "Edit User Balance" ?></h2>
						</div>
					</div>
					<?php echo form_open("backend/user/user/balance_edit") ?>
					<?php echo form_hidden('id', @$user->id) ?>
					<?php echo form_hidden('user_id', @$user->user_id) ?>
					
					<div class="col-sm-12" style="margin-bottom:50px;">

						
						<div class="col-sm-6 row">
							<label for="coin_symbol" class="col-sm-12">Coin<i class="text-danger">*</i></label>
							<div class="form-group">
								<!-- <label for="coin_symbol" class="col-sm-4 col-form-label">Coin<i class="text-danger">*</i></label> -->
								<div class="col-sm-12">
									<select class="form-control" id="coin_symbol" name="coin_symbol" required>
										<option value="" selected disabled hidden=true></option>
											<?php foreach ($coins as $key => $coin) {
												echo "<option value='".$coin->symbol."'>".$coin->coin_name."</option>";
											}?>
									</select>
								</div>
							</div>
						</div>

						<div class="col-sm-6 row">
							<label for="action" class="col-sm-12">Action<i class="text-danger">*</i></label>
							<div class="form-group">
								<!-- <label for="coin_symbol" class="col-sm-4 col-form-label">Coin<i class="text-danger">*</i></label> -->
								<div class="col-sm-12">
									<select class="form-control" id="action" name="action" required>
										<option value="" selected disabled hidden=true></option>
										<option>ADD</option>
										<option>SUBTRACT</option>
									</select>
								</div>
							</div>
						</div>


						<div class="col-sm-6 row">
							<label for="from" class="col-sm-12">From<i class="text-danger">*</i></label>
							<div class="form-group">
								<!-- <label for="coin_symbol" class="col-sm-4 col-form-label">Coin<i class="text-danger">*</i></label> -->
								<div class="col-sm-12">
									<select class="form-control" id="from" name="from" required>
										<option value="" selected disabled hidden=true></option>
										<option value="balance">Available Funds</option>
										<option value="on_hold">Frozen Funds</option>
									</select>
								</div>
							</div>
						</div>


						<div class="col-sm-6 row">
							<label for="amount" class="col-sm-12">Amount<i class="text-danger">*</i></label>
							<div class="form-group">
								<div class="col-sm-12">
									<input name="amount" class="form-control" placeholder="Amount" type="number" min="0.00000001" step="0.00000001" id="amount">
								</div>
							</div>
						</div>

						<div class="col-sm-12 row">
						<div class="col-sm-12 row">
							<label for="info" class="col-sm-12">Info for balance log (If any) <small>--- only applicable to Available Funds ---</small></label>
							<div class="form-group">
								<div class="col-sm-12">
									<input name="info" class="form-control" placeholder="Info" type="text" id="info">
								</div>
							</div>
						</div>
						</div>

						<div class="col-sm-6" style="margin-top:20px;">
							<a href="<?php echo base_url('admin'); ?>" class="btn btn-primary"><?php echo display("cancel") ?></a>
							<button type="submit" class="btn btn-success">Change Balance</button>
						</div>

					</div>

					<?php echo form_close() ?>
					


					<div class="panel-heading">
						<div class="panel-title">
							<h2><?php echo "User Balance List" ?></h2>
						</div>
					</div>
					
                    	<table class="datatable1 table table-bordered table-hover table-striped">
		                    <thead>
		                        <tr> 
		                            <th><?php echo display('sl_no')?></th>
		                            <th><?php echo "CryptoCoin ID";?></th>
		                            <th><?php echo display('name')?></th>
		                            <th><?php echo "Available Funds";?></th>
									<th><?php echo "Frozen Funds";?></th>
		                        </tr>
		                    </thead>
							<!-- BALANCE TABLE with javascript below -->
		                    <tbody id="balance_body">
	                       		
	                        </tbody>
							<input type="text" id="balance_track" style="display:none;" value="0">
	                	</table>

							<hr>
						<div class="row text-center">
							<button id="balance_prev">&laquo; Prev</button>
							&emsp;
							<button id="balance_next">Next &raquo;</button>
						</div>
							


                    </div>
                </div>
				<!-- tab -->
                <div class="tab-pane fade" id="tab3">
                    <div class="panel-body" style="overflow-x:scroll;">
                    	<table class="datatable1 table table-bordered table-hover table-striped">
		                    <thead>
                                <tr class="table-bg">
                                    <th>SL</th>
                                    <th>Transaction</th>
                                    <th>Amount</th>
                                    <th>Fees</th>
									<th>Hash</th>
                                    <th>Coin</th>
                                </tr>
                            </thead>
							<!-- TRANSACTION LOG TABLE with javascript below -->
		                    <tbody id="transaction_body">

	                    	</tbody>
							<input type="text" id="transaction_track" style="display:none;" value="0">
	                	</table>

						<hr>
						<div class="row text-center">
							<button id="transaction_prev">&laquo; Prev</button>
							&emsp;
							<button id="transaction_next">Next &raquo;</button>
						</div>

                    </div>
                </div>
				<!-- tab -->
                <div class="tab-pane fade" id="tab4">
                    <div class="panel-body" style="overflow-x:scroll;">
                    	<div id="user_tradelist"></div>
                    	<table id="user_tradelist" class="datatable1 table table-bordered table-hover table-striped" style="font-size:10px">
		                    <thead>
		                        <tr> 
		                            <th class="date">No</th>
		                            <th class="date">ID</th>
		                            <th class="date">Type</th>
		                            <th class="date">Order Type</th>
                                    <th class="date">Trade</th>
                                    <th class="date">Rate</th>
                                    <th class="date">Total QTY</th>
                                    <th class="date">Available QTY</th>
                                    <th class="date">Total Amount</th>
                                    <th class="date">Available Amount</th>
                                    <th class="date">Market</th>
                                    <th class="date">Created</th>
                                    <th class="date">Status</th>
		                        </tr>
		                    </thead>
							<!-- TRADE HISTORY TABLE with javascript below -->
							<tbody id="history_body">

	                    	</tbody>
							<input type="text" id="history_track" style="display:none;" value="0">
	                    	
	                	</table>

						
						<hr>
						<div class="row text-center">
							<button id="history_prev">&laquo; Prev</button>
							&emsp;
							<button id="history_next">Next &raquo;</button>
						</div>
	                	<!-- <span id="pagination_link"></span> -->
                    </div>
                </div>
				<!-- tab -->
                <div class="tab-pane fade" id="tab5">
                    <div class="panel-body" style="overflow-x:scroll;">
                    	<table class="datatable1 table table-bordered table-hover table-striped">
		                    <thead>
		                        <tr> 
									<th>No</th>
		                            <th>Coin Name</th>
		                            <th>Wallet</th>
		                            <th>Last Coin TX</th>
		                            <th>Last Token1 TX</th>
		                            <th>Last Token2 TX</th>
		                        </tr>
		                    </thead>
							<!-- ADDRESS TABLE with javascript below -->
		                    <tbody id="address_body">

	                    	</tbody>
							<input type="text" id="address_track" style="display:none;" value="0">
	                	</table>
						
						<hr>
						<div class="row text-center">
							<button id="address_prev">&laquo; Prev</button>
							&emsp;
							<button id="address_next">Next &raquo;</button>
						</div>
                    </div>
                </div>
				<!-- tab -->
                <div class="tab-pane fade" id="tab6">
                    <div class="panel-body" style="overflow-x:scroll;">
                    	<table class="datatable1 table table-bordered table-hover table-striped" style="font-size:12px">
		                    <thead>
		                        <tr> 
									<th>No</th>
		                            <th>Invoice</th>
		                            <th>User Action</th>
		                            <th>Advert ID</th>
		                            <th>Coin</th>
		                            <th>Country</th>
		                            <th>Bank</th>
		                            <th>Coin Amount</th>
									<th>Coin Price</th>
		                            <th>FIAT Rate</th>
		                            <th>FIAT Amount</th>
		                            <th>Created</th>
		                            <th>Status</th>
		                        </tr>
		                    </thead>
							<!-- FIAT TABLE with javascript below -->
		                    <tbody id="fiat_body">

	                    	</tbody>
							<input type="text" id="fiat_track" style="display:none;" value="0">
	                	</table>
						
						<hr>
						<div class="row text-center">
							<button id="fiat_prev">&laquo; Prev</button>
							&emsp;
							<button id="fiat_next">Next &raquo;</button>
						</div>
                    </div>
                </div>

				<!-- tab -->
                <div class="tab-pane fade" id="tab7">
                    <div class="panel-body" style="overflow-x:scroll;">
                    	<table class="datatable1 table table-bordered table-hover table-striped" style="font-size:12px">
		                    <thead>
		                        <tr> 
									<th>No</th>
		                            <th>Invoice</th>
		                            <th>Advert ID</th>
		                            <th>Country</th>
		                            <th>Type</th>
		                            <th>Desc</th>
									<th>Price</th>
									<th>Coin</th>
									<th>Amount</th>
		                            <th>Created</th>
		                            <th>Status</th>
		                        </tr>
		                    </thead>
							<!-- FIAT TABLE with javascript below -->
		                    <tbody id="services_body">

	                    	</tbody>
							<input type="text" id="services_track" style="display:none;" value="0">
	                	</table>
						
						<hr>
						<div class="row text-center">
							<button id="services_prev">&laquo; Prev</button>
							&emsp;
							<button id="services_next">Next &raquo;</button>
						</div>
                    </div>
                </div>

				<!-- tab -->
				<div class="tab-pane fade" id="tab8">
					<div class="panel-body" style="overflow-x:scroll;">
						<table class="datatable1 table table-bordered table-hover" style="font-size:12px">
							<thead>
								<tr> 
									<th>No</th>
									<th>Invoice</th>
									<th>Created</th>
									<th>Executable</th>
									<th>Type</th>
									<th>Contracted to</th>
									<th>From</th> 
									<th>To</th>
									<th>Rate</th>
									<th>Total Amount</th>
									<th>Available</th>
									<th>sell Amount</th>
									<th>Receive Amount</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<!-- CONTRACT TABLE with javascript below -->
							<tbody id="contract_body">

							</tbody>
							<input type="text" id="contract_track" style="display:none;" value="0">
						</table>
						
						<hr>
						<div class="row text-center">
							<button id="contract_prev">&laquo; Prev</button>
							&emsp;
							<button id="contract_next">Next &raquo;</button>
						</div>
					</div>
				</div>

				<!-- tab -->
				<div class="tab-pane fade" id="tab9">
					<div class="panel-body" style="overflow-x:scroll;">
						<table class="datatable1 table table-bordered table-hover" style="font-size:12px">
							<thead>
								<tr> 
									<th>No</th>
									<th>Project ID</th>
									<th>Coin</th>
									<th>Symbol</th>
									<th>Amount Bought</th>
									<th>Invest Coin</th>
									<th>Amount</th>
									<th>USD Value</th>
									<th>Shareholders Link</th>
									<th>Action</th>
								</tr>
							</thead>
							<!-- INVESTMENT TABLE with javascript below -->
							<tbody id="investment_body">

							</tbody>
							<input type="text" id="investment_track" style="display:none;" value="0">
						</table>
						
						<hr>
						<div class="row text-center">
							<button id="investment_prev">&laquo; Prev</button>
							&emsp;
							<button id="investment_next">Next &raquo;</button>
						</div>
					</div>
				</div>

				<!-- tab -->
				<div class="tab-pane fade" id="tab10">
					<div class="panel-body" style="overflow-x:scroll;">
						<table class="datatable1 table table-bordered table-hover" style="font-size:12px">
							<thead>
								<tr> 
									<th>No</th>
									<th>Ticket</th>
									<th>Type</th>
									<th>Title</th>
									<th>Created</th>
									<th>Tended to</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<!-- SUPPORT TABLE with javascript below -->
							<tbody id="support_body">

							</tbody>
							<input type="text" id="support_track" style="display:none;" value="0">
						</table>
						
						<hr>
						<div class="row text-center">
							<button id="support_prev">&laquo; Prev</button>
							&emsp;
							<button id="support_next">Next &raquo;</button>
						</div>
					</div>
				</div>

				<!-- tab -->
				<div class="tab-pane fade" id="tab11">
					<div class="panel-body" style="overflow-x:scroll;">
						<table class="datatable1 table table-bordered table-hover" style="font-size:12px">
							<thead>
								<tr> 
									<th>No</th>
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
							<!-- API TABLE with javascript below -->
							<tbody id="api_body">

							</tbody>
							<input type="text" id="api_track" style="display:none;" value="0">
						</table>
						
						<hr>
						<div class="row text-center">
							<button id="api_prev">&laquo; Prev</button>
							&emsp;
							<button id="api_next">Next &raquo;</button>
						</div>
					</div>
				</div>




                
                
                
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

//  function load_country_data(page, user)
//  {
// 	$.ajax({
// 		url:"<?php echo base_url(); ?>backend/user/user/ajax_tradelist/"+user+"/"+page,
// 		method:"GET",
// 		dataType:"json",
// 		success:function(data)
// 		{
// 			// console.log(data);
// 			$('#user_tradelist').html(data.country_table);
// 			$('#pagination_link').html(data.pagination_link);
// 		}
// 	});
//  }
//  var user = $('#user_id').val();
//  load_country_data(1, user);

// 	$(document).on("click", ".pagination li a", function(event){
// 		event.preventDefault();
// 		var page = $(this).data("ci-pagination-page");
// 		var user = $('#user_id').val();
// 		load_country_data(page, user);
// 	});

});









// BALANCE TABLE-------------------------------------------------//
fetchBalanceTable("next");
$("#balance_prev").click(function(){
	fetchBalanceTable("prev");
});
$("#balance_next").click(function(){
	fetchBalanceTable("next");
});
function fetchBalanceTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#balance_track').val()>=2){
			num = parseInt($('#balance_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#balance_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/balance_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#balance_prev").show();
				$('#balance_track').val(num);
				
				$("#balance_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#balance_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designBalanceTable(no++, data[i]);

					$("#balance_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#balance_next").show();
				$('#balance_track').val(num);

				
				$("#balance_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#balance_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designBalanceTable(no++, data[i]);

					$("#balance_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#balance_next").hide();
				$("#balance_prev").show();
			}
			if($('#balance_track').val()<=1 && type == "prev"){
				$("#balance_prev").hide();
				$("#balance_next").show();
			}
			
		}
	}, 'json');
	
}
function designBalanceTable(no, data){
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+ data.id +"</td>"
					+"<td>"
						+"<div class='d-flex marks-ico'>"
							+"<img src='" + "<?php echo base_url() ?>" + data.image + "' alt='' style='width:20px'>"

								+"<font> "+data.symbol+"</font>"
								+"<span class='text-muted'> ("+data.coin_name+")</span>"
						+"</div>"
					+"</td>"
					+"<td>"+data.balance+"</td>"
					+"<td>"+data.on_hold+"</td>"
				+"</tr>"

	return value;
}
// END BALANCE TABLE-------------------------------------------------//





// TRANSACTION LOG TABLE-------------------------------------------------//
fetchTransactionTable("next");
$("#transaction_prev").click(function(){
	fetchTransactionTable("prev");
});
$("#transaction_next").click(function(){
	fetchTransactionTable("next");
});
function fetchTransactionTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#transaction_track').val()>=2){
			num = parseInt($('#transaction_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#transaction_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/transaction_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#transaction_prev").show();
				$('#transaction_track').val(num);
				
				$("#transaction_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#transaction_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designTransactionTable(no++, data[i]);

					$("#transaction_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#transaction_next").show();
				$('#transaction_track').val(num);

				
				$("#transaction_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#transaction_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designTransactionTable(no++, data[i]);

					$("#transaction_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#transaction_next").hide();
				$("#transaction_prev").show();
			}
			if($('#transaction_track').val()<=1 && type == "prev"){
				$("#transaction_prev").hide();
				$("#transaction_next").show();
			}
			
		}
	}, 'json');
	
}
function designTransactionTable(no, data){
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+ data.transaction_type +"</td>"
					+"<td>"+parseFloat(data.transaction_amount)+" "+data.symbol+"</td>"
					+"<td>"+data.transaction_fees+"</td>"
					+"<td>"+data.transaction_hash+"</td>"
					+"<td>"
						+"<div class='d-flex marks-ico'>"
							+"<img src='" + "<?php echo base_url() ?>" + data.image + "' alt='' style='width:20px'>"

								+"<font> "+data.symbol+"</font>"
								+"<span class='text-muted'> ("+data.coin_name+")</span>"
						+"</div>"
					+"</td>"
				+"</tr>"

	return value;
}

// END TRANSACTION LOG TABLE-------------------------------------------------//







// TRADE HISTORY TABLE-------------------------------------------------//
fetchHistoryTable("next");
$("#history_prev").click(function(){
	fetchHistoryTable("prev");
});
$("#history_next").click(function(){
	fetchHistoryTable("next");
});
function fetchHistoryTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#history_track').val()>=2){
			num = parseInt($('#history_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#history_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/trade_history_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#history_prev").show();
				$('#history_track').val(num);
				
				$("#history_body").empty();
				var no = 1 + (parseInt($('#history_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designHistoryTable(no++, data[i]);

					$("#history_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#history_next").show();
				$('#history_track').val(num);

				
				$("#history_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#history_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designHistoryTable(no++, data[i]);

					$("#history_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#history_next").hide();
				$("#history_prev").show();
			}
			if($('#history_track').val()<=1 && type == "prev"){
				$("#history_prev").hide();
				$("#history_next").show();
			}
			
		}
	}, 'json');
	
}
function designHistoryTable(no, data){
	var status = (data.status==0)?"<p class='label-warning text-white text-center'>Canceled</p>":((data.status==1)?"<p class='label-success text-white text-center'>Completed</p>":((data.status==2)?"<p class='label-primary text-white text-center'>Running</p>":"<p class='label-primary text-white text-center'>Pending Trigger</p>"));
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+ data.id +"</td>"
					+"<td>"+ data.type +"</td>"
					+"<td>"+ data.order_type +"</td>"
					+"<td>"+ data.bid_type +"</td>"
					+"<td>"+data.bid_price+"</td>"
					+"<td>"+data.bid_qty+"</td>"
					+"<td>"+data.bid_qty_available+"</td>"
					+"<td>"+ data.total_amount +"</td>"
					+"<td>"+data.amount_available+"</td>"
					+"<td>"+data.market_symbol+"</td>"
					+"<td>"+data.open_order+"</td>"
					+"<td>"+status+"</td>"
				+"</tr>"

	return value;
}
// END TRADE HISTORY TABLE-------------------------------------------------//








// ADDRESS TABLE-------------------------------------------------//
fetchAddressTable("next");
$("#address_prev").click(function(){
	fetchAddressTable("prev");
});
$("#address_next").click(function(){
	fetchAddressTable("next");
});
function fetchAddressTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#address_track').val()>=2){
			num = parseInt($('#address_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#address_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/address_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#address_prev").show();
				$('#address_track').val(num);
				
				$("#address_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#address_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designAddressTable(no++, data[i]);

					$("#address_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#address_next").show();
				$('#address_track').val(num);

				
				$("#address_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#address_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designAddressTable(no++, data[i]);

					$("#address_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#address_next").hide();
				$("#address_prev").show();
			}
			if($('#address_track').val()<=1 && type == "prev"){
				$("#address_prev").hide();
				$("#address_next").show();
			}
			
		}
	}, 'json');
	
}
function designAddressTable(no, data){
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"
						+"<div class='d-flex marks-ico'>"
							+"<img src='" + "<?php echo base_url() ?>" + data.image + "' alt='' style='width:20px'>"

								+"<font> "+data.symbol+"</font>"
								+"<span class='text-muted'> ("+data.coin_name+")</span>"
						+"</div>"
					+"</td>"
					+"<td>"+data.wallet+"</td>"
					+"<td>"+data.last_coin_tx+"</td>"
					+"<td>"+data.last_token1_tx+"</td>"
					+"<td>"+data.last_token2_tx+"</td>"
				+"</tr>"

	return value;
}
// END ADDRESS TABLE-------------------------------------------------//








// FIAT TABLE-------------------------------------------------//
fetchFiatTable("next");
$("#fiat_prev").click(function(){
	fetchFiatTable("prev");
});
$("#fiat_next").click(function(){
	fetchFiatTable("next");
});
function fetchFiatTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#fiat_track').val()>=2){
			num = parseInt($('#fiat_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#fiat_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/fiat_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#fiat_prev").show();
				$('#fiat_track').val(num);
				
				$("#fiat_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#fiat_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designFiatTable(no++, data[i]);

					$("#fiat_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#fiat_next").show();
				$('#fiat_track').val(num);

				
				$("#fiat_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#fiat_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designFiatTable(no++, data[i]);

					$("#fiat_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#fiat_next").hide();
				$("#fiat_prev").show();
			}
			if($('#fiat_track').val()<=1 && type == "prev"){
				$("#fiat_prev").hide();
				$("#fiat_next").show();
			}
			
		}
	}, 'json');
	
}
function designFiatTable(no, data){
	var status = (data.status==0)?"<p class='label-warning text-white text-center'>Canceled</p>":((data.status==1)?"<p class='label-success text-white text-center'>Completed</p>":"<p class='label-primary text-white text-center'>Running</p>");
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+data.invoice+"</td>"
					+"<td>"+data.user_action+"</td>"
					+"<td>"+data.advert_id+"</td>"
					+"<td>"+data.coin_symbol+"</td>"
					+"<td>"+data.country_name+"</td>"
					+"<td>"+data.bank_name+"</td>"
					+"<td>"+data.coin_symbol+"</td>"
					+"<td>"+data.total_amount + " " + data.coin_symbol +"</td>"
					+"<td>"+addCommas(parseFloat(data.local_rate).toFixed(2)) + " " + data.currency_code +"</td>"
					+"<td>"+addCommas(parseFloat(data.local_amount).toFixed(2)) + " " + data.currency_code +"</td>"
					+"<td>"+data.created+"</td>"
					+"<td>"+status+"</td>"
				+"</tr>"

	return value;
}
// END FIAT TABLE-------------------------------------------------//








// SERVICES TABLE-------------------------------------------------//
fetchServicesTable("next");
$("#services_prev").click(function(){
	fetchServicesTable("prev");
});
$("#services_next").click(function(){
	fetchServicesTable("next");
});
function fetchServicesTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#services_track').val()>=2){
			num = parseInt($('#services_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#services_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/services_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#services_prev").show();
				$('#services_track').val(num);
				
				$("#services_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#services_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designServicesTable(no++, data[i]);

					$("#services_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#services_next").show();
				$('#services_track').val(num);

				
				$("#services_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#services_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designServicesTable(no++, data[i]);

					$("#services_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#services_next").hide();
				$("#services_prev").show();
			}
			if($('#services_track').val()<=1 && type == "prev"){
				$("#services_prev").hide();
				$("#services_next").show();
			}
			
		}
	}, 'json');
	
}
function designServicesTable(no, data){
	var status = (data.status==0)?"<p class='label-warning text-white text-center'>Canceled</p>":((data.status==1)?"<p class='label-success text-white text-center'>Completed</p>":"<p class='label-primary text-white text-center'>Running</p>");
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+data.invoice+"</td>"
					+"<td>"+data.advert_id+"</td>"
					+"<td>"+data.country_name+"</td>"
					+"<td>"+data.type_name+"</td>"
					+"<td>"+data.description+"</td>"
					+"<td>$ "+parseFloat(data.usd_amount)+"</td>"
					+"<td>"+data.coin_symbol+"</td>"
					+"<td>"+parseFloat(data.minus_fees_amount) + " " + data.coin_symbol +"</td>"
					+"<td>"+data.created+"</td>"
					+"<td>"+status+"</td>"
				+"</tr>"

	return value;
}
// END SERVICES TABLE-------------------------------------------------//








// CONTRACT TABLE-------------------------------------------------//
fetchContractTable("next");
$("#contract_prev").click(function(){
	fetchContractTable("prev");
});
$("#contract_next").click(function(){
	fetchContractTable("next");
});
function fetchContractTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#contract_track').val()>=2){
			num = parseInt($('#contract_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#contract_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/contract_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#contract_prev").show();
				$('#contract_track').val(num);
				
				$("#contract_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#contract_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designContractTable(no++, data[i]);

					$("#contract_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#contract_next").show();
				$('#contract_track').val(num);

				
				$("#contract_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#contract_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designContractTable(no++, data[i]);

					$("#contract_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#contract_next").hide();
				$("#contract_prev").show();
			}
			if($('#contract_track').val()<=1 && type == "prev"){
				$("#contract_prev").hide();
				$("#contract_next").show();
			}
			
		}
	}, 'json');
	
}
function designContractTable(no, data){
	var status = (data.status==0)?"<p class='label-warning text-white text-center'>Canceled</p>":((data.status==1)?"<p class='label-success text-white text-center'>Completed</p>":"<p class='label-primary text-white text-center'>Running</p>");
	var paint = (data.type=="advert")?'!important bg-info':'';
	var from = (data.advert_from_coin)?data.advert_from_coin:data.deal_from_coin;
	var to = (data.advert_to_coin)?data.advert_to_coin:data.deal_to_coin;
	var link = (data.advert_invoice)?data.advert_invoice:data.invoice;
	var value = "<tr class='"+paint+"'>"
					+"<td>"+ no +"</td>"
					+"<td>"+data.invoice+"</td>"
					+"<td>"+data.created+"</td>"
					+"<td>"+data.execution_day+" Days after creation</td>"
					+"<td>"+data.type+"</td>"
					+"<td>"+data.advert_invoice+"</td>"
					+"<td>"+from+"</td>"
					+"<td>"+to+"</td>"
					+"<td> 1 "+data.advert_from_coin+" = "+parseFloat(data.advert_rate)+" "+data.advert_to_coin+"</td>"
					+"<td>"+parseFloat(data.advert_total_amount)+" "+data.advert_from_coin+"</td>"
					+"<td>"+parseFloat(data.advert_available_amount)+" "+data.advert_from_coin+"</td>"
					+"<td>"+parseFloat(data.deal_from_total_amount)+" "+data.deal_from_coin+"</td>"
					+"<td>"+parseFloat(data.deal_to_minus_fees_amount)+" "+data.deal_to_coin+"</td>"
					+"<td>"+status+"</td>"
					+"<td><a class='btn btn-info' style='font-size:8px' href='<?php echo base_url("contract/page/") ?>"+link+"'>View</a></td>"
				+"</tr>"

	return value;
}
// END CONTRACT TABLE-------------------------------------------------//








// INVESTMENT TABLE-------------------------------------------------//
fetchInvestmentTable("next");
$("#investment_prev").click(function(){
	fetchInvestmentTable("prev");
});
$("#investment_next").click(function(){
	fetchInvestmentTable("next");
});
function fetchInvestmentTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#investment_track').val()>=2){
			num = parseInt($('#investment_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#investment_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/investment_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#investment_prev").show();
				$('#investment_track').val(num);
				
				$("#investment_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#investment_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designInvestmentTable(no++, data[i]);

					$("#investment_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#investment_next").show();
				$('#investment_track').val(num);

				
				$("#investment_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#investment_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designInvestmentTable(no++, data[i]);

					$("#investment_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#investment_next").hide();
				$("#investment_prev").show();
			}
			if($('#investment_track').val()<=1 && type == "prev"){
				$("#investment_prev").hide();
				$("#investment_next").show();
			}
			
		}
	}, 'json');
	
}
function designInvestmentTable(no, data){
	var shareholding = "";
	if(data.shareholders_link){
		shareholding = "<a href='"+data.shareholders_link+"'>"+data.shareholders_link+"</a>";
	}else{
		shareholding = "Not Qualified";
	}
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+data.project_id+"</td>"
					+"<td>"+data.project_coin+"</td>"
					+"<td>"+data.project_coin_symbol+"</td>"
					+"<td>"+parseFloat(data.project_coin_amount)+" "+data.project_coin_symbol+"</td>"
					+"<td>"+data.coin_name+"</td>"
					+"<td>"+parseFloat(data.coin_amount)+" "+data.coin_symbol+"</td>"
					+"<td>$ "+addCommas(parseFloat(data.usd_value).toFixed(2))+"</td>"
					+"<td>"+shareholding+"</td>"
					+"<td><a class='btn btn-info' style='font-size:8px' href='<?php echo base_url("funding/project/") ?>"+data.project_id+"'>View</a></td>"
				+"</tr>"

	return value;
}
// END INVESTMENT TABLE-------------------------------------------------//








// SUPPORT TABLE-------------------------------------------------//
fetchSupportTable("next");
$("#support_prev").click(function(){
	fetchSupportTable("prev");
});
$("#support_next").click(function(){
	fetchSupportTable("next");
});
function fetchSupportTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#support_track').val()>=2){
			num = parseInt($('#support_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#support_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/support_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#support_prev").show();
				$('#support_track').val(num);
				
				$("#support_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#support_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designSupportTable(no++, data[i]);

					$("#support_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#support_next").show();
				$('#support_track').val(num);

				
				$("#support_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#support_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designSupportTable(no++, data[i]);

					$("#support_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#support_next").hide();
				$("#support_prev").show();
			}
			if($('#support_track').val()<=1 && type == "prev"){
				$("#support_prev").hide();
				$("#support_next").show();
			}
			
		}
	}, 'json');
	
}
function designSupportTable(no, data){
	var tended_to = (data.attended==0)?"<p class='label-warning text-white text-center'>NO</p>":"<p class='label-success text-white text-center'>YES</p>";
	var status = (data.status==0)?"<p class='label-secondary text-white text-center'>CLOSED</p>":((data.status==1)?"<p class='label-success text-white text-center'>COMPLETED</p>":"<p class='label-primary text-white text-center'>RUNNING</p>");
	var type = (data.type=="email")?"Email Support":"Live Support";
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+data.ticket+"</td>"
					+"<td>"+type+"</td>"
					+"<td>"+data.title+"</td>"
					+"<td>"+data.created+"</td>"
					+"<td>"+tended_to+"</td>"
					+"<td>"+status+"</td>"
					+"<td><a class='btn btn-info' style='font-size:8px' href='<?php echo base_url("support/admin_ticket/") ?>"+data.ticket+"'>View</a></td>"
				+"</tr>"

	return value;
}
// END SUPPORT TABLE-------------------------------------------------//








// API TABLE-------------------------------------------------//
fetchApiTable("next");
$("#api_prev").click(function(){
	fetchApiTable("prev");
});
$("#api_next").click(function(){
	fetchApiTable("next");
});
function fetchApiTable(type){
	var num = 0;
	
	if(type == "prev"){
		if($('#api_track').val()>=2){
			num = parseInt($('#api_track').val())-1;
		}else{
			num = 1;
		}
	}else{
		num = parseInt($('#api_track').val())+1;
	}
	
	$.get('<?php echo base_url("backend/user/user/api_list") ?>?user=<?php echo $user->user_id ?>&page='+num, function(data, status){
		if(status == "success"){
			if(data.length>0 && type == "next"){
				$("#api_prev").show();
				$('#api_track').val(num);
				
				$("#api_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#api_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designApiTable(no++, data[i]);

					$("#api_body").append(value);
					
				}
			}
			// if(data.length<=0 && type == "next"){
			// 	$('#balance_track').val(parseInt($('#balance_track').val())-1);
			// }

			if(data.length>0 && type == "prev"){
				$("#api_next").show();
				$('#api_track').val(num);

				
				$("#api_body").empty();
				//use total to fetch on each page defined in controller
				var no = 1 + (parseInt($('#api_track').val())*100)-100;
				for(var i=0; i<data.length; i++){

					var value = designApiTable(no++, data[i]);

					$("#api_body").append(value);
					
				}
			}
			if(data.length < 1 && type == "next"){
				$("#api_next").hide();
				$("#api_prev").show();
			}
			if($('#api_track').val()<=1 && type == "prev"){
				$("#api_prev").hide();
				$("#api_next").show();
			}
			
		}
	}, 'json');
	
}
function designApiTable(no, data){
	var status = (data.status==0)?"<p class='label-warning text-white text-center'>INACTIVE</p>":"<p class='label-success text-white text-center'>ACTIVE</p>";
	var changeVal = (data.status == 1)?0:1;
	var value = "<tr>"
					+"<td>"+ no +"</td>"
					+"<td>"+data.api_key+"</td>"
					+"<td>"+data.h1+"</td>"
					+"<td>"+data.h24+"</td>"
					+"<td>"+data.w1+"</td>"
					+"<td>"+data.m1+"</td>"
					+"<td>"+status+"</td>"
					+"<td><a class='btn btn-danger' style='font-size:12px' href='<?php echo base_url("backend/user/user/change_api_key_status/".$user->id."/") ?>"+data.api_key+"/"+changeVal+"'>Change Status</a></td>"
					+"<td><a class='btn btn-danger' style='font-size:12px' href='<?php echo base_url("backend/user/user/delete_api_key/".$user->id."/".$user->user_id."/") ?>"+data.id+"'>delete</a></td>"
				+"</tr>"

	return value;
		
}
// END API TABLE-------------------------------------------------//








function addCommas(nStr){
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}


</script>